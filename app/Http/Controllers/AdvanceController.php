<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advance;
use App\Models\Vendor;
use App\Models\Advanceuse;
use App\Library\Common;
use Illuminate\Support\Facades\Auth;

class AdvanceController extends Controller
{

    public function add(Request $request)
    {
        //? ตรวจสอบข้อมูล
        $request->validate(
            [
                'advanceValue' => 'required|numeric',
                'advanceDate' => 'required',
            ],
            [
                'advanceValue.required' => "กรุณาเพิ่มยอดเบิกล่วงหน้า",
                'advanceValue.numeric' => "ยอดเงินต้องเป็นตัวเลขเท่านั้น",
                'advanceDate.required' => "กรุณาเพิ่มวันที่เบิกล่วงหน้า",
            ]
        );

        //TODO เอาค่ามาเอา comma ออก
        $advanceValue = $request->advanceValue;
        $advanceValueResult = str_replace(',', '', $advanceValue);

        //? บันทึกข้อมูลแบบ Eloquen
        $advance = new Advance; // ดึงเอาข้อมูลจาก Model advance มา
        $advance->advance_value = $advanceValueResult;
        $advance->advance_date = $request->advanceDate;
        $advance->advance_used = 0;
        $advance->type = $request->type;
        $advance->remark = $request->remark;
        $advance->status = 'ยังไม่ใช้';
        $advance->file_advance = '';
        $advance->person_id = Auth::user()->id;
        $advance->vendor_id = $request->vendorId;
        $advance->save();

        //? ดึง id ล่าสุดของตาราง advance มาเพื่อไปเป็นคีย์นอกของตารางต่างๆ
        $lastAdvanceId = Advance::orderBy('id', 'DESC')->first(); // ดึง  product_id ที่เพิ่มเข้าไปในฐานข้อมูลตัวล่าสุดออกมา
        $lastAdvanceIdResult = $lastAdvanceId->id;

        //TODO อัพโหลดรูปภาพ

        //? รับรูปภาพ
        $fileAdvance = $request->file('fileAdvance');

        if (isset($fileAdvance)) {
            //? อัพโหลดไฟล์ภาพ
            $uploadLocation = "file/advance/"; // ที่เก็บไฟล์


            $imgExtAdvance = strtolower($fileAdvance->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgAdvance = $lastAdvanceIdResult . "_vendor." . $imgExtAdvance; // รวมชื่อและนามสกุลไฟล์
            $pathAdvance = $uploadLocation . $imgAdvance;

            $fileAdvance->move($uploadLocation, $imgAdvance);

            //? อัพเดทข้อมูลแบบ Eloquen
            Advance::find($lastAdvanceIdResult)->update([
                'file_advance' => $pathAdvance,
            ]);
        }
        return redirect()->back()->with('successadvance', 'บันทึกข้อมูลเรียบร้อย');
    }
    public function avedit($advanceId)
    {
        $advance = Advance::find($advanceId);
        $vendor = Vendor::all();
        return view('advance.advance_edit', compact('advance', 'vendor'));
    }

    public function icedit($advanceId)
    {
        $income = Advance::find($advanceId);
        return view('income.income_edit', compact('income'));
    }
    public function update($advanceId, Request $request)
    {

        //TODO เอาค่ามาเอา comma ออก
        $advanceValue = $request->advanceValue;
        $advanceValueResult = str_replace(',', '', $advanceValue);

        Advance::find($advanceId)->update([
            'advance_value' => $advanceValueResult,
            'advance_date' => $request->advanceDate,
            'vendor_id' => $request->vendorId,
            'remark' => $request->remark,
        ]);

        return redirect()->back()->with('success', 'แก้ไขข้อมูลเรียบร้อย');
    }
    public function avdetail($advanceId)
    {
        $advance = Advance::find($advanceId);
        $date = $advance->advance_date;

        // เปลี่ยนวันให้กลายเป็น function
        $convertDate = new Common;
        $newDateadvance = $convertDate::dateThai($date);

        $advanceData = [
            'id' => $advance->id,
            'name' => $advance->user->name,
            'advance_value' => $advance->advance_value,
            'advance_used' => $advance->advance_used,
            'advance_remain' => $advance->advance_value - $advance->advance_used,
            'vendor' => $advance->vendor->vendor_name . " (" . $advance->vendor->vendor_name . ")",
            'file_account' => $advance->vendor->file_account,
            'file_advance' => $advance->file_advance,
            'advance_date' => $newDateadvance,
            'remark' => $advance->remark,
        ];

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


        return view('advance.advance_detail', compact('advanceData', 'advanceUseArr'));
    }
    public function icdetail($advanceId)
    {

        //? Start : Income Detail Section
        $advance = Advance::find($advanceId);
        $date = $advance->advance_date;

        // เปลี่ยนวันให้กลายเป็น function
        $convertDate = new Common;
        $newDateadvance = $convertDate::dateThai($date);

        $incomeData = [
            'id' => $advance->id,
            'name' => $advance->user->name,
            'advance_value' => $advance->advance_value,
            'advance_used' => $advance->advance_used,
            'advance_remain' => $advance->advance_value - $advance->advance_used,
            'vendor' => $advance->vendor->vendor_name,
            'file_account' => $advance->vendor->file_account,
            'file_advance' => $advance->file_advance,
            'advance_date' => $newDateadvance,
            'remark' => $advance->remark,
        ];
        //? End : Income Detail Section

        //? Start : Income Table Section
        $income = Advanceuse::where('advance_id', $advanceId)->get(); // รายการที่ใช้ไปในแต่ละ advance
        $incomeUse = [];

        foreach ($income as $row) {
            $date = $row->advance->advance_date;

            // เปลี่ยนวันให้กลายเป็น function
            $convertDate = new Common;
            $newDateadvance = $convertDate::dateThai($date);

            $incomeArr = [
                'id' => $row->id,
                'advance_value' => $row->advance_value,
                'disburse_id' => $row->disburse_id,
                'disburse' => $row->disburse->disburse_name,
                'file_advance' => $row->advance->file_advance,
                'advance_date' => $newDateadvance,
                'remark' => $row->remark,
            ];
            array_push($incomeUse, $incomeArr);
        }

        //? End : Income Table Section

        return view('income.income_detail', compact('incomeData', 'incomeUse'));
    }
    public function alldata()
    {
        //? จัดทำยอด Advance สำหรับแสดงผลหน้าหลัก
        $advanceData = Advance::where('type', 'advance')
            ->get(); // ยอด advance ทั้งหมดในตาราง advance

        $advanceDocs = [];

        foreach ($advanceData as $advance) {
            $advanceValue = $advance->advance_value;
            $advanceUsed = $advance->advance_used;
            $advanceRemain = $advanceValue - $advanceUsed;

            $date = $advance->advance_date;
            // เปลี่ยนวันให้กลายเป็น function
            $newDate = Common::dateThai($date);
            $doc = [
                'id' => $advance->id,
                'vendor' => $advance->vendor->vendor_sname,
                'advance_value' => $advanceValue,
                'advance_used' => $advanceUsed,
                'advance_remain' => $advanceRemain,
                'file_advance' => $advance->file_advance,
                'advance_date' => $newDate,
                'remark' => $advance->remark,
            ];
            array_push($advanceDocs, $doc);
        }
        $resultAdvance = $advanceDocs;

        $vendor = Vendor::all();

        return view('advance.advance_all', compact('resultAdvance', 'vendor'));
    }
}
