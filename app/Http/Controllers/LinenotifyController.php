<?php

namespace App\Http\Controllers;

use App\Models\Disburse;
use App\Library\Common;

class LinenotifyController extends Controller
{
    public function index() // ตัวแปร group สำหรับตัดสินว่ายังเข้ากลุ่มไหน
    {
        return view('linenotify_main');
    }
    public function send($group, $botname) // ตัวแปร group สำหรับตัดสินว่ายังเข้ากลุ่มไหน
    {
        date_default_timezone_set("Asia/Bangkok");
        $curdate = today(); // วันที่ปัจจุบันสำหรับใช้เทียบกับตัวในฐานข้อมูล
        $curdateResult = date_format($curdate, "Y-m-d");

        $disburseNoRound = Disburse::where('payment_status', 'ยังไม่โอน') // ดึงข้อมูลยังไม่โอน และยังไม่มีรอบโอนส่งไป
            ->where(function ($query) { // จัดกลุ่มการเชื่อมแบบ OR
                $query->where('payment_ready_date', NULL) // ถ้าวันที่สะดวกโอนเป็นค่า NULL
                    ->orwhere('payment_ready_date', '0000-00-00'); // หรือวันที่สะดวกโอนเป็นค่าว่าง
            })
            ->get();

        $disburseNoRoundDocs = [];

        foreach ($disburseNoRound as $disburse) {
            $sum = 0;
            $payments = Disburse::find($disburse->id)->payments;

            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }
            $remainValue = $disburse->disburse_value - $sum; // ยอดคงเหลือ
            $receivedDate = $disburse->received_date;

            if ($receivedDate != '' && $receivedDate != '0000-00-00' && $receivedDate != NULL) {

                // เปลี่ยนวันให้กลายเป็น function
                $newReceivedDate = Common::dateThai($receivedDate);
            } else {
                $newReceivedDate = "-";
            }
            $doc = [
                'id' => $disburse->id,
                'disburse_name' => $disburse->disburse_name,
                'value' => $disburse->disburse_value,
                'vendors' => $disburse->vendor->vendor_sname,
                'received_date' => $newReceivedDate,
                'remain_value' => $remainValue,
            ];
            array_push($disburseNoRoundDocs, $doc);
        }
        $resultDisburseNoRound = $disburseNoRoundDocs;


        $disburseApproachRound = Disburse::where('payment_status', 'ยังไม่โอน') // ดึงข้อมูลยังไม่โอนแต่มีรอบโอนแล้วส่งไป
            ->where('payment_ready_date', $curdateResult)
            ->get();

        $disburseApproachRoundDocs = [];

        foreach ($disburseApproachRound as $disburse) {
            $sum = 0;
            $payments = Disburse::find($disburse->id)->payments;

            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }
            $remainValue = $disburse->disburse_value - $sum; // ยอดคงเหลือ
            $receivedDate = $disburse->received_date;

            if ($receivedDate != '' && $receivedDate != '0000-00-00' && $receivedDate != NULL) {

                // เปลี่ยนวันให้กลายเป็น function
                $newReceivedDate = Common::dateThai($receivedDate);
            } else {
                $newReceivedDate = "-";
            }
            $doc = [
                'id' => $disburse->id,
                'disburse_name' => $disburse->disburse_name,
                'value' => $disburse->disburse_value,
                'vendors' => $disburse->vendor->vendor_sname,
                'received_date' => $disburse->received_date,
                'remain_value' => $remainValue,
            ];
            array_push($disburseApproachRoundDocs, $doc);
        }
        $resultDisburseApproachRound = $disburseApproachRoundDocs;

        $disburseExceedRound = Disburse::where('payment_status', 'ยังไม่โอน') // ดึงข้อมูลยังไม่โอนแต่มีรอบโอนแล้วส่งไป
            ->where('payment_ready_date', '<', $curdateResult) // หรือวันที่สะดวกโอนเลยวันปัจจุบันไปแล้ว เพราะลืมโอน
            ->get();


        $disburseExceedRoundDocs = [];

        foreach ($disburseExceedRound as $disburse) {
            $sum = 0;
            $payments = Disburse::find($disburse->id)->payments;

            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }
            $remainValue = $disburse->disburse_value - $sum; // ยอดคงเหลือ
            $receivedDate = $disburse->received_date;

            if ($receivedDate != '' && $receivedDate != '0000-00-00' && $receivedDate != NULL) {

            $doc = [
                'id' => $disburse->id,
                'disburse_name' => $disburse->disburse_name,
                'value' => $disburse->disburse_value,
                'vendors' => $disburse->vendor->vendor_sname,
                'received_date' => $receivedDate,
                'remain_value' => $remainValue,
            ];
            array_push($disburseExceedRoundDocs, $doc);
        }
        $resultDisburseExceedRound = $disburseExceedRoundDocs;
        return view('linenotify_send', compact('resultDisburseNoRound', 'resultDisburseApproachRound', 'resultDisburseExceedRound', 'group', 'botname'));
    }
}
