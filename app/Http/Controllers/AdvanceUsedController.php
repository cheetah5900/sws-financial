<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advance;
use App\Models\Advanceuse;
use App\Models\Payment;
use App\Models\Disburse;
use App\Library\Common;
use Illuminate\Support\Facades\Auth;

class AdvanceUsedController extends Controller
{
    //? สำหรับแสดงข้อมูลของ advance นั้นๆเพื่อใช้งานใน advanceUse
    public function avadvanceUse($advanceId)
    {
        $advanceData = Advance::find($advanceId); // เอา advance_id ไปหา รายละเอียด advance นั้นๆมา
        $vendorIdFromAdvance = $advanceData->vendor_id; // vendor_id ที่ส่งเข้ามา

        $disburseThisVendor = Disburse::where('vendor_id', $vendorIdFromAdvance)
            ->where('payment_status', 'ยังไม่โอน')
            ->get(); // เอารายการเบิกจ่ายที่ยังไม่โอน และเป็นของผรม นี้ ไปแสดงให้เลือกว่าจะใช้ยอดกับอันไหน

        $disburseSelected = [];

        foreach ($disburseThisVendor as $row) {
            $sum = 0;
            $disburseId = $row->id;

            //? เริ่มต้น : สรุปยอดที่ใช้ไปด้วยตาราง payment
            $payments = Disburse::find($disburseId)->payments;
            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }

            //? สิ้นสุด : สรุปยอดที่ใช้ไปด้วยตาราง payment

            $disburseThisVendorDocs = [
                'id' => $row->id,
                'disburse_name' => $row->disburse_name,
                'value' => $row->disburse_value - $sum
            ];
            array_push($disburseSelected, $disburseThisVendorDocs);
        }

        
        $advanceUse = Advanceuse::where('advance_id', $advanceId)->get(); // รายการที่ใช้ไปในแต่ละ advance
        
        $advanceUseArr = [];

        foreach ($advanceUse as $row) {

            $advanceDate = $row->advance->advance_date;
            $convertDate = Common::dateThai($advanceDate);

            $advanceUseDoc = [
                'disburse_id' => $row->id,
                'advance_value' => $row->advance_value,
                'disburse_name' => $row->disburse->disburse_name,
                'advance_date' => $convertDate,
                'remark' => $row->remark,
            ];
            array_push($advanceUseArr, $advanceUseDoc);
        }

        return view('advance.advance_use', compact('disburseSelected', 'advanceData', 'advanceUseArr'));
    }
    public function icadvanceUse($advanceId)
    {
        $advanceData = Advance::find($advanceId);

        $newDate = Common::dateThai($advanceData->advance_date);

        $advanceDataDocs = [
            'id' => $advanceData->id,
            'advance_value' => $advanceData->advance_value,
            'advance_date' => $newDate,
            'advance_used' => $advanceData->advance_used,
            'advance_remain' => $advanceData->advance_value - $advanceData->advance_used,
        ];

        $disburseNotPay = Disburse::where('payment_status', 'ยังไม่โอน')->get(); // เอารายการเบิกจ่ายที่ยังไม่โอนไปแสดงให้เลือกว่าจะใช้ยอดกับอันไหน
        $disburseSelected = [];

        foreach ($disburseNotPay as $row) {
            $sum = 0;
            $disburseId = $row->id;

            //? เริ่มต้น : สรุปยอดที่ใช้ไปด้วยตาราง payment
            $payments = Disburse::find($disburseId)->payments;
            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }

            //? สิ้นสุด : สรุปยอดที่ใช้ไปด้วยตาราง payment

            $disburseNotPayDocs = [
                'id' => $row->id,
                'disburse_name' => $row->disburse_name,
                'vendor' => $row->vendor->vendor_sname,
                'value' => $row->disburse_value - $sum
            ];
            array_push($disburseSelected, $disburseNotPayDocs);
        }

        $advanceUse = Advanceuse::where('advance_id', $advanceId)->get(); // รายการที่ใช้ไปในแต่ละ advance
        $advanceUseArr = [];

        foreach ($advanceUse as $row) {

            $advanceDate = $row->advance->advance_date;
            $convertDate = Common::dateThai($advanceDate);

            $advanceUseDoc = [
                'disburse_id' => $row->id,
                'advance_value' => $row->advance_value,
                'disburse_name' => $row->disburse->disburse_name,
                'advance_date' => $convertDate,
                'remark' => $row->remark,
            ];
            array_push($advanceUseArr, $advanceUseDoc);
        }
        return view('income.income_use', compact('advanceDataDocs', 'advanceUseArr', 'disburseSelected'));
    }
    public function updateadvanceUse(Request $request)
    {
        //? ตรวจสอบข้อมูล
        $request->validate(
            [
                'advanceValue' => 'required',
            ],
            [
                'advanceValue.required' => "กรุณาเพิ่มยอดที่ต้องการใช้",
            ]
        );
        //TODO เอาค่ามาเอา comma ออก
        $advanceValue = $request->advanceValue;
        $advanceValueResult = str_replace(',', '', $advanceValue);

        //TODO เอา id ของ advance ไปใส่ตัวแปรเพื่อให้เรียกใช้ได้หลายครั้ง
        $advanceId = $request->advanceId;

        //? บันทึกข้อมูลแบบ Eloquen เข้าไปในตาราง AdvanceUse
        $advanceUse = new Advanceuse; // ดึงเอาข้อมูลจาก Model advance มา
        $advanceUse->advance_value = $advanceValueResult;
        $advanceUse->disburse_id = $request->disburseId;
        $advanceUse->remark = $request->remark;
        $advanceUse->person_id = Auth::user()->id;
        $advanceUse->advance_id = $advanceId;
        $advanceUse->save();

        //? อัพเดทยอดที่ใช้ไป เข้าไปยังตาราง Advance เพื่อจะได้รู้ว่าถูกใช้ไปเท่าไรแล้ว โดยต้องดึงค่าเดิมออกแล้วแล้วบวกเพิ่มไป
        $advance = Advance::find($advanceId); // เรียกตาราง Advance ออกมา
        $advanceUsed = $advance->advance_used; // หาจำนวนเดิมที่มีอยู่ในตาราง

        $sumAdvanceUsed = $advanceUsed + $advanceValueResult; // นำจำนวนเดิมมารวมกับจำนวนใหม่ที่เพิ่มเข้าไป

        Advance::find($advanceId)->update([ // อัพเดทกลับเข้าไปในตารางดังกล่าว
            'advance_used' => $sumAdvanceUsed,
        ]);

        //TODO อัพเดทยอด Advance เข้าไปที่ตาราง Payment เพื่อให้รู้ว่าเราจ่ายไปแล้ว

        //? เอา disburseId ที่ได้รับเข้ามาไปเก็บในตัวแปรเพื่อเรียกใช้หลายรอบ
        $disburseId = $request->disburseId;

        //? หาจำนวนว่า disburseId นี้มีการเบิกจ่ายมาแล้วกี่ครั้ง

        $paymentCountTimes = Payment::where('disburse_id', $disburseId)->orderBy('id', 'DESC')->first(); // เอา disburseId เข้าไปค้นว่ามีมั้ย
        if ($paymentCountTimes == '') { // ถ้านับแล้วไม่มีการเบิกมาก่อนจะทำการเพิ่มจำนวนครั้งให้เป็นเลข 1
            $paymentCountTimesResult = 1;
        } else { // ถ้าเคยมีมาแล้วจะดึงเลขล่าสุดออกมาเพิ่มไป 1 และใช้งาน
            $paymentCountTimesResult = $paymentCountTimes->payment_times + 1;
        }

        //? บันทึกข้อมูลแบบ Eloquen ใส่ตาราง payment
        $payment = new Payment; // ดึงเอาข้อมูลจาก Model payment มา
        $payment->payment_value = $advanceValueResult; // ยอดที่ เอาของ advance มาใส่เป็นยอดเบิก
        $payment->payment_times = $paymentCountTimesResult; // จำนวนครั้ง
        $payment->payment_datetime = $advance->advance_date;
        $payment->remark = "$request->remark $request->type";
        $payment->file_payment = $advance->file_advance;
        $payment->disburse_id = $disburseId;
        $payment->save();

        return redirect()->back()->with('successadvance', 'บันทึกข้อมูลเรียบร้อย');
    }
}
