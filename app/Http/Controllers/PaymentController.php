<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disburse;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function paymentadd(Request $request)
    {
        //? ตรวจสอบข้อมูล
        $request->validate(
            [
                'paymentValue' => 'required',
                'paymentDate' => 'required',
                'paymentTime' => 'required',
                'filePayment' => 'required',
            ],
            [
                'paymentValue.required' => "กรุณาเพิ่มยอดโอน",
                'paymentDate.required' => "กรุณาเพิ่มวันที่โอน",
                'paymentTime.required' => "กรุณาเพิ่มเวลาที่โอน",
                'filePayment.required' => "กรุณาเพิ่มไฟล์โอน",
            ]
        );

        //TODO เอาค่ามาเอา comma ออก
        $paymentValue = $request->paymentValue;
        $paymentValueResult = str_replace(',', '', $paymentValue);

        //TODO เอา disburseId ที่ได้รับเข้ามาไปเก็บในตัวแปรเพื่อเรียกใช้หลายรอบ
        $disburseId = $request->disburseId;

        //TODO หาจำนวนว่า disburseId นี้มีการเบิกจ่ายมาแล้วกี่ครั้ง

        $payment = new Payment; // ดึงเอาข้อมูลจาก Model payment มา
        $paymentCountTimes = Payment::find($disburseId); // เอา disburseId เข้าไปค้นว่ามีมั้ย
        if ($paymentCountTimes == '') { // ถ้านับแล้วไม่มีการเบิกมาก่อนจะทำการเพิ่มจำนวนครั้งให้เป็นเลข 1
            $paymentCountTimesResult = 1;
        } else { // ถ้าเคยมีมาแล้วจะดึงเลขล่าสุดออกมาเพิ่มไป 1 และใช้งาน
            $paymentCountTimesResult = $paymentCountTimes->payment_times + 1;
        }

        //? บันทึกข้อมูลแบบ Eloquen
        $payment->payment_value = $paymentValueResult;
        $payment->payment_times = $paymentCountTimesResult;
        $payment->payment_datetime = $request->paymentDate . " " . $request->paymentTime;
        $payment->remark = $request->remark;
        $payment->file_payment = '';
        $payment->disburse_id = $disburseId;
        $payment->save();

        //? ดึง id ล่าสุดของตาราง payment มาเพื่อไปเป็นคีย์นอกของตารางต่างๆ
        $lastPaymentId = Payment::orderBy('id', 'DESC')->first(); // ดึง  product_id ที่เพิ่มเข้าไปในฐานข้อมูลตัวล่าสุดออกมา
        $lastPaymentIdResult = $lastPaymentId->id;

        //TODO อัพโหลดรูปภาพ

        //? รับรูปภาพ
        $filePayment = $request->file('filePayment');

        //? อัพโหลดไฟล์ภาพ
        $uploadLocation = "file/" . $disburseId . "/"; // ที่เก็บไฟล์

        //? รูป
        $imgExtPayment = strtolower($filePayment->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
        $imgPayment = $disburseId . "_reciept_" . $lastPaymentIdResult . "." . $imgExtPayment; // รวมชื่อและนามสกุลไฟล์
        $pathPayment = $uploadLocation . $imgPayment;

        $filePayment->move($uploadLocation, $imgPayment);

        //? อัพเดทข้อมูลแบบ Eloquen
        Payment::find($lastPaymentIdResult)->update([
            'file_payment' => $pathPayment,
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }
}
