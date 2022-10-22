<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disburse;
use App\Models\Vendor;
use App\Models\Payment;
use App\Models\Advance;
use App\Library\Common;
use Illuminate\Support\Facades\Auth;

class DisburseController extends Controller
{
    function index()
    {
        $disburseList = Disburse::all()->sortByDesc('id'); // ดึงข้อมูลแบบแสดงข้อมูลแบบ Eloqean

        $disburseDocs = [];

        foreach ($disburseList as $disburse) {
            $sum = 0;
            $payments = Disburse::find($disburse->id)->payments;

            foreach ($payments as $payment) {
                $sum = $sum + $payment->payment_value;
            }

            $paymentStatus = $disburse->payment_status;
            // ตรวจสอบว่าสถานะการโอนเป็นอะไรจะได้ใส่สีให้ถูกต้องตามนั้น
            if ($paymentStatus == 'ยังไม่โอน') {
                $colorStatus = "danger";
            } elseif ($paymentStatus == 'โอนแล้ว') {
                $colorStatus = "success";
            } elseif ($paymentStatus == 'พักไว้ก่อน') {
                $colorStatus = "warning";
            } else {
                $colorStatus = "seccondary";
            }
            for ($i = 1; $i <= 2; $i++) { // วน 2 รอบโดยรอบแรกเป็นของ disburse ส่วนรอบที่สองเป็นของ payment-ready-date
                ($i == 1 ? $date = $disburse->received_date : $date = $disburse->payment_ready_date);
                if ($date != '' && $date != '0000-00-00' && $date != NULL) {
                    if ($i == 1) { // ถ้า $i เป็น 1 แสดงว่าตอนนี้กำลังทำ received_date อยู่ จะต้องดึงแต่ละตัวในอาเรย์ออกมาแปลงเป็นวันที่ของไทย
                        $splitReceivedDate = explode(",", $date); // แยกวันที่รับเงินหลายวันด้วย comma

                        $receiveDateAmount =  count($splitReceivedDate); // นับจำนวนของชุดวันที่ ที่มี
                        $sumNewDate = ""; // สร้าง String เปล่าเพื่อเตรียมรับข้อความที่ถูกแยกออก กลับเข้ามารวมกัน
                        for ($k = 0; $k <= $receiveDateAmount - 1; $k++) { // loop เพื่อเอาแต่ละค่าของ array ออกมา
                            $date = $splitReceivedDate[$k]; // วันที่แต่ละชุดที่จะโดนดึงข้อมูลออกมา
                            $newDate = Common::dateThai($date); // เปลี่ยนวัน ISO ให้กลายเป็นวันของไทย

                            $sumNewDate = $sumNewDate . "\n" . $newDate; // เอาค่าที่ถูกแปลงแล้วกลับไปรวมกัน
                        }
                    } else {
                        // เปลี่ยนวัน ISO ให้กลายเป็นวันของไทย
                        $newDate = Common::dateThai($date);
                    }

                    ($i == 1 ? $newReceivedDate = $sumNewDate : $newDatePayment = $newDate); // ถ้ารอบแรกจะเก็บค่าเข้าใส่ของ disburse แต่ถ้ารอบที่สองจะเก็บค่าใส่ payment ready date 
                } else {
                    ($i == 1 ? $newReceivedDate = "" : $newDatePayment = "");
                }
            }

            $doc = [
                'id' => $disburse->id,
                'disburse_name' => $disburse->disburse_name,
                'name' => $disburse->user->name,
                'value' => $disburse->disburse_value,
                'vendor' => $disburse->vendor->vendor_name,
                'vendors' => $disburse->vendor->vendor_sname,
                'received_date' => $newReceivedDate,
                'payment_ready_date' => $newDatePayment,
                'gr_status' => $disburse->gr_status,
                'color_status' => $colorStatus,
                'payment_status' => $paymentStatus,
                'remark' => $disburse->remark,
                'sumvalue' => $sum,
            ];
            array_push($disburseDocs, $doc);
        }
        $resultDisburse = $disburseDocs;
        $vendor = Vendor::all(); // รายชื่อ ผรม ที่ให้เลือกตอนจะเพิ่มเบิกจ่าย

        //? จัดทำยอด Advance สำหรับแสดงผลหน้าหลัก
        $advanceData = Advance::where('type', 'advance')
            ->get(); // ยอด advance ทั้งหมดในตาราง advance

        $advanceDocs = [];

        foreach ($advanceData as $advance) {
            $advanceValue = $advance->advance_value;
            $advanceUsed = $advance->advance_used;
            $advanceRemain = $advanceValue - $advanceUsed;

            if ($advanceRemain > 0) { // ถ้า ยอดคงเหลือยังไม่หมด ก็ให้แสดงออกมา
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
        }
        $resultAdvance = $advanceDocs;

        //? จัดทำยอด Income สำหรับแสดงผลหน้าหลัก
        $incomeData = Advance::where('type', 'income')->get(); // ยอด advance ที่มีประเภทเป็น income

        $incomeDocs = [];

        foreach ($incomeData as $income) {
            $date = $income->advance_date;

            // เปลี่ยนวันให้กลายเป็น function
            $newDateadvance = Common::dateThai($date);

            $doc = [
                'id' => $income->id,
                'vendor' => $income->vendor->vendor_name,
                'advance_value' => $income->advance_value,
                'advance_used' => $income->advance_used,
                'advance_remain' => $income->advance_value - $income->advance_used,
                'file_advance' => $income->file_advance,
                'advance_date' => $newDate,
                'remark' => $income->remark,
            ];
            array_push($incomeDocs, $doc);
        }
        $resultIncome = $incomeDocs;

        //? รายการที่มีสถานะเป็นยังไม่โอนจะแสดงออกมาให้เลือกเพื่อใช้ยอด Advnace
        $disburseForAdvance = Disburse::where('payment_status', 'ยังไม่โอน')->get(); // การเบิกจ่ายที่ไม่ใช้สถานะโอนแล้วเพื่อทำยอด advance

        return view('disburse.disburse', compact('resultDisburse', 'resultAdvance', 'resultIncome', 'vendor', 'disburseForAdvance'));
    }
    public function add(Request $request)
    {
        //? ตรวจสอบข้อมูล
        $request->validate(
            [
                'disburseName' => 'required',
                'disburseValue' => 'required',
                'disburseDate' => 'required',
                'fileVendor' => 'required',
            ],
            [
                'disburseName.required' => "กรุณาเพิ่มชื่อการเบิกจ่าย",
                'disburseValue.required' => "กรุณาเพิ่มยอดเบิก",
                'disburseDate.required' => "กรุณาเพิ่มวันที่ขอเบิก",
                'fileVendor.required' => "กรุณาเพิ่มไฟล์เบิกผู้รับเหมา",
            ]
        );

        //TODO เอาค่า disburse value มาเอา comma และ space bar ออก
        $getDisburseValue = $request->disburseValue;
        $disburseValueRemoveSpace = str_replace(' ', '', $getDisburseValue);
        $disburseValueResult = str_replace(',', '', $disburseValueRemoveSpace);

        //TODO เอาค่ามาเปลี่ยน / ให้กลายเป็น - ก่อนเอาไปคิดคำนวณต่อ
        $receiveDate = $request->receivedDate;
        if ($receiveDate != '') {

            $receiveDateResult = str_replace('/', '-', $receiveDate);
            //TODO เอาค่ามาแยกวันที่ออกเป็นชุด แล้วเอาไปเรียงใหม่ 
            $splitReceivedDate = explode(",", $receiveDateResult); // แยกวันที่รับเงินหลายวันด้วย comma
            $sumNewDate = ""; // สร้าง String เปล่าเพื่อเตรียมรับข้อความที่ถูกแยกออก กลับเข้ามารวมกัน
            for ($k = 0; $k <= count($splitReceivedDate) - 1; $k++) { // loop เพื่อเอาแต่ละค่าของ array ออกมา           
                $splitReceivedDate[$k]; // วันที่แต่ละชุดที่ยังเป็น - อยู่เช่น 31-01-2022

                // ตัดสินว่าจะใส่ comma ไปหรือไม่ ถ้าเป็นครั้งแรกไม่ต้องใส่ comma
                if ($k != 0) {
                    $comma = ",";
                } else {
                    $comma = "";
                }

                //TODO เอาวันที่รับเงิน (splitReceivedDate) มาเรียงให้เป็น ปี เดือน วัน เช่น 2022-01-31
                $valueAfterSplit = explode("-", $splitReceivedDate[$k]); // แยกวันเดือนปี ออกจากกัน

                $day = $valueAfterSplit[0];
                $month = $valueAfterSplit[1];
                $year = $valueAfterSplit[2];

                $newDateFormat = $year . "-" . $month . "-" . $day;
                $sumNewDate = $sumNewDate . $comma . $newDateFormat;
            }
        } else {
            $sumNewDate = "";
        }


        //? บันทึกข้อมูลแบบ Eloquen
        $disburse = new Disburse; // ดึงเอาข้อมูลจาก Model disburse มา
        $disburse->disburse_name = $request->disburseName; // ข้อมูลที่ดึงมาจากในตาราง = ข้อมูลที่ส่งเข้ามา
        $disburse->disburse_value = $disburseValueResult;
        $disburse->disburse_date = $request->disburseDate;
        $disburse->received_date = $sumNewDate;
        $disburse->payment_ready_date = $request->paymentReadyDate;
        $disburse->gr_status = $request->grStatus;
        $disburse->payment_status = $request->paymentStatus;
        $disburse->remark = $request->remark;
        $disburse->file_vendor = '';
        $disburse->file_sws = '';
        $disburse->person_id = Auth::user()->id;
        $disburse->vendor_id = $request->vendorId;
        $disburse->save();

        //? ดึง id ล่าสุดของตาราง disburse มาเพื่อไปเป็นคีย์นอกของตารางต่างๆ
        $lastDisburseId = Disburse::orderBy('id', 'DESC')->first(); // ดึง  product_id ที่เพิ่มเข้าไปในฐานข้อมูลตัวล่าสุดออกมา
        $lastDisburseIdResult = $lastDisburseId->id;

        //! อัพโหลดรูปภาพ

        //? รับรูปภาพ
        $fileVendor = $request->file('fileVendor');
        $fileSws = $request->file('fileSws');

        //? อัพโหลดไฟล์ภาพ
        $uploadLocation = "file/" . $lastDisburseIdResult . "/"; // ที่เก็บไฟล์

        //? รูปที่ 1
        $imgExtVendor = strtolower($fileVendor->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
        $imgVendor = $lastDisburseIdResult . "_vendor." . $imgExtVendor; // รวมชื่อและนามสกุลไฟล์
        $pathVendor = $uploadLocation . $imgVendor;

        $fileVendor->move($uploadLocation, $imgVendor);

        //? ถ้ามีการอัพโหลดเข้ามาจะทำการตั้งชื่อไฟล์และอัพโหลด
        //? รูปที่ 2
        if ($fileSws) {
            $imgExtSws = strtolower($fileSws->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgSws = $lastDisburseIdResult . "_sws." . $imgExtSws; // รวมชื่อและนามสกุลไฟล์
            $pathSws = $uploadLocation . $imgSws;

            //? อัพโหลดไฟล์เข้าไปในโฟลเดอร์เก็บไฟล์
            $fileSws->move($uploadLocation, $imgSws);
        } else {
            $pathSws = '';
        }

        //? อัพเดทข้อมูลแบบ Eloquen
        Disburse::find($lastDisburseIdResult)->update([
            'file_vendor' => $pathVendor,
            'file_sws' => $pathSws,
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }
    public function edit($disburseId)
    {
        $disburse = Disburse::find($disburseId);
        $vendor = Vendor::all();

        $disburseData = [
            'id' => $disburse->id,
            'disburse_name' => $disburse->disburse_name,
            'disburse_value' => $disburse->disburse_value,
            'disburse_date' => $disburse->disburse_date,
            'received_date' => $disburse->received_date,
            'payment_ready_date' => $disburse->payment_ready_date,
            'gr_status' => $disburse->gr_status,
            'payment_status' => $disburse->payment_status,
            'remark' => $disburse->remark,
            'file_vendor' => $disburse->file_vendor,
            'file_sws' => $disburse->file_sws,
            'vendor_id' => $disburse->vendor->id,
        ];

        return view('disburse.disburse_edit', compact('disburseData', 'vendor'));
    }

    public function update(Request $request, $id)
    {
        //? เอาค่ามาเอา comma และ space bar ออก
        $getDisburseValue = $request->disburseValue;
        $disburseValueRemoveSpace = str_replace(' ', '', $getDisburseValue);
        $disburseValueResult = str_replace(',', '', $disburseValueRemoveSpace);

        //TODO เอาค่ามาเปลี่ยน / ให้กลายเป็น - ก่อนเอาไปคิดคำนวณต่อ
        $receiveDate = $request->receivedDate;
        if ($receiveDate != '') {

            $receiveDateResult = str_replace('/', '-', $receiveDate);
            //TODO เอาค่ามาแยกวันที่ออกเป็นชุด แล้วเอาไปเรียงใหม่ 
            $splitReceivedDate = explode(",", $receiveDateResult); // แยกวันที่รับเงินหลายวันด้วย comma
            $sumNewDate = ""; // สร้าง String เปล่าเพื่อเตรียมรับข้อความที่ถูกแยกออก กลับเข้ามารวมกัน
            for ($k = 0; $k <= count($splitReceivedDate) - 1; $k++) { // loop เพื่อเอาแต่ละค่าของ array ออกมา           
                $splitReceivedDate[$k]; // วันที่แต่ละชุดที่ยังเป็น - อยู่เช่น 31-01-2022

                // ตัดสินว่าจะใส่ comma ไปหรือไม่ ถ้าเป็นครั้งแรกไม่ต้องใส่ comma
                if ($k != 0) {
                    $comma = ",";
                } else {
                    $comma = "";
                }

                //? เอาวันที่รับเงิน (splitReceivedDate) มาเรียงให้เป็น ปี เดือน วัน เช่น 2022-01-31
                $valueAfterSplit = explode("-", $splitReceivedDate[$k]); // แยกวันเดือนปี ออกจากกัน

                $day = $valueAfterSplit[0];
                $month = $valueAfterSplit[1];
                $year = $valueAfterSplit[2];

                $newDateFormat = $year . "-" . $month . "-" . $day;
                $sumNewDate = $sumNewDate . $comma . $newDateFormat;
            }
        } else {
            $sumNewDate = "";
        }

        //TODO เอาช่องไฟล์เบิกผู้รับเหมาและไฟล์เบิกศรีสมวงศ์มาตรวจสอบว่าได้อัพโหลดไฟล์มาหรือไม่ 
        //TODO ถ้าอัพมาก็ต้องอัพเดท แต่ถ้าเป็นค่าว่าง ให้ดึงค่าเก่ามาอัพเดทในช่องเดิม และไม่ต้องอัพโหลดไฟล์

        $uploadLocation = "file/" . $id . "/"; // ที่เก็บไฟล์

        $fileVendor = $request->file('fileVendor'); // รับไฟล์
        $fileSws = $request->file('fileSws');

        $oldPathVendor = $request->oldPathVendor;
        $removedPath =  env('APP_URL') . "/"; // path ที่จะ remove เพราะตอนที่ค่าส่งเข้ามา มันส่ง APP_URL มาด้วย
        $oldPathVendor = str_replace($removedPath, "", $oldPathVendor); // replace APP_URL ออกให้เหลือแต่ path_file
        // $folderToDeleteVendor = $_SERVER['DOCUMENT_ROOT'] . "/" . $oldPathVendor; // absolute path ของว vendor file

        $folderToDeleteVendor = $_SERVER['DOCUMENT_ROOT'] . "/public" . "/" . $oldPathVendor; // absolute path ของว vendor file

        if ($fileVendor) {
            if ($oldPathVendor != "") {
                unlink($folderToDeleteVendor);
            }

            $imgExtVendor = strtolower($fileVendor->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgVendor = $id . "_vendor." . $imgExtVendor; // รวมชื่อและนามสกุลไฟล์
            $pathVendor = $uploadLocation . $imgVendor;

            //? อัพโหลดไฟล์เข้าไปในโฟลเดอร์เก็บไฟล์
            $fileVendor->move($uploadLocation, $imgVendor);
        } else {
            $pathVendor = $oldPathVendor;
        }

        $oldPathSws = $request->oldPathSws;
        $removedPath =  env('APP_URL') . "/"; // path ที่จะ remove เพราะตอนที่ค่าส่งเข้ามา มันส่ง APP_URL มาด้วย
        $oldPathSws = str_replace($removedPath, "", $oldPathSws);
        // $folderToDeleteSws = $_SERVER['DOCUMENT_ROOT'] . "/" . $oldPathSws; // absolute path ของว vendor file

        $folderToDeleteSws = $_SERVER['DOCUMENT_ROOT'] . "/public" . "/" . $oldPathSws; // absolute path ของว vendor file

        if ($fileSws) {

            if ($oldPathSws != "") {
                unlink($folderToDeleteSws);
            }

            $imgExtSws = strtolower($fileSws->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgSws = $id . "_sws." . $imgExtSws; // รวมชื่อและนามสกุลไฟล์
            $pathSws = $uploadLocation . $imgSws;

            //? อัพโหลดไฟล์เข้าไปในโฟลเดอร์เก็บไฟล์
            $fileSws->move($uploadLocation, $imgSws);
        } else {
            $pathSws = $oldPathSws;
        }


        //? อัพเดทข้อมูลแบบ Eloquen
        Disburse::find($id)->update([
            'disburse_name' => $request->disburseName,
            'disburse_value' => $disburseValueResult,
            'disburse_date' => $request->disburseDate,
            'received_date' => $sumNewDate,
            'payment_ready_date' => $request->paymentReadyDate,
            'gr_status' => $request->grStatus,
            'payment_status' => $request->paymentStatus,
            'file_vendor' => $pathVendor,
            'file_sws' => $pathSws,
            'remark' => $request->remark,
            'vendor_id' => $request->vendorId
        ]);

        return redirect()->route('disburse')->with('success', 'แก้ไขข้อมูลเรียบร้อย');
    }
    public function delete($disburseId)
    {
        Disburse::find($disburseId)->delete();
        return redirect()->route('disburse')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }

    public function detail($disburseId)
    {
        $disburse = Disburse::find($disburseId);
        $paymentList = Payment::where('disburse_id', $disburseId)->get(); // เอา disburseId เข้าไปค้นว่ามีการเบิกจ่ายมั้ยมั้ย

        //TODO ตาราง payment
        $docPayment = []; // สร้าง array ขึ้นมาลอยๆเพื่อรองรับ array push
        // Loop การเบิกจ่ายของรายการนี้ออกมาทั้งหมด
        foreach ($paymentList as $payment) {
            // เปลี่ยนวันให้กลายเป็น function
            $newDatePayment = Common::dateTimeThai($payment->payment_datetime);

            $doc = [
                'id' => $payment->id,
                'payment_times' => $payment->payment_times,
                'payment_value' => $payment->payment_value,
                'payment_datetime' => $newDatePayment,
                'file_payment' => $payment->file_payment,
                'remark' => $payment->remark
            ];
            array_push($docPayment, $doc);
        }
        $paymentForLoop = $docPayment;
        //TODO ผลรวม
        $sumValue = 0;
        foreach ($paymentList as $row) {
            $sumValue += $row->payment_value; // จำนวนทั้งหมดที่จ่ายไปแล้ว
        }
        // วน 3 รอบโดยรอบแรกเป็นของ received_date รอบสองเป็นของ disburse และรอบสามเป็นของ payment_ready_date
        for ($i = 1; $i <= 3; $i++) {
            if ($i == 1) {
                $date = $disburse->received_date;
            } elseif ($i == 2) {
                $date = $disburse->disburse_date;
            } elseif ($i == 3) {
                $date = $disburse->payment_ready_date;
            }
            if ($date != '' && $date != '0000-00-00' && $date != NULL) {

                if ($i == 1) { // ถ้า $i เป็น 1 แสดงว่าตอนนี้กำลังทำ received_date อยู่ จะต้องดึงแต่ละตัวในอาเรย์ออกมาแปลงเป็นวันที่ของไทย
                    $splitReceivedDate = explode(",", $date); // แยกวันที่รับเงินหลายวันด้วย comma
                    $receiveDateAmount =  count($splitReceivedDate); // นับจำนวนของวันที่มี
                    $sumNewDate = ""; // สร้าง String เปล่าเพื่อเตรียมรับข้อความที่ถูกแยกออก กลับเข้ามารวมกัน
                    for ($k = 0; $k <= $receiveDateAmount - 1; $k++) { // loop เพื่อเอาแต่ละค่าของ array ออกมา
                        $date = $splitReceivedDate[$k]; // วันที่แต่ละชุดที่จะโดนดึงข้อมูลออกมา
                        $newDate = Common::dateThai($date); // เปลี่ยนวัน ISO ให้กลายเป็นวันของไทย

                        $sumNewDate = $sumNewDate . "\n" . $newDate; // เอาค่าที่ถูกแปลงแล้วกลับไปรวมกัน
                    }
                } else {
                    // เปลี่ยนวัน ISO ให้กลายเป็นวันของไทย
                    $newDate = Common::dateThai($date);
                }
                if ($i == 1) {
                    $newDateReceived = $sumNewDate;
                } elseif ($i == 2) {
                    $newDateDisburse = $newDate;
                } elseif ($i == 3) {
                    $newDatePayment = $newDate;
                }
            } else { // ถ้าไม่มีวันที่จะกำหนดให้ตัวแปรเป็นค่าว่าง

                if ($i == 1) {
                    $newDateReceived = "";
                } elseif ($i == 2) {
                    $newDateDisburse = "";
                } elseif ($i == 3) {
                    $newDatePayment = "";
                }
            }
        }

        $disburseData = [
            'id' => $disburse->id,
            'user' => $disburse->user->name,
            'disburse_name' => $disburse->disburse_name,
            'disburse_value' => $disburse->disburse_value,
            'disburse_date' => $newDateDisburse,
            'received_date' => $newDateReceived,
            'file_vendor' => $disburse->file_vendor,
            'file_sws' => $disburse->file_sws,
            'gr_status' => $disburse->gr_status,
            'payment_status' => $disburse->payment_status,
            'vendor_name' => $disburse->vendor->vendor_name,
            'vendor_sname' => $disburse->vendor->vendor_sname,
            'vendor_account' => $disburse->vendor->vendor_account,
            'vendor_bank' => $disburse->vendor->vendor_bank,
            'file_account' => $disburse->vendor->file_account,
            'remark' => $disburse->remark,
            'payment_ready_date' => $newDatePayment,
            'vendor_id' => $disburse->vendor->vendor_sname,
        ];

        return view('disburse.disburse_detail', compact('disburseData', 'paymentForLoop', 'sumValue'));
    }
    public function detail_edit($paymentId, $disburseId)
    {
        $payment = Payment::find($paymentId);
        $date = substr($payment->payment_datetime, 0, -9);
        $time = date("H:i", strtotime($payment->payment_datetime));
        $paymentData = [
            'id' => $payment->id,
            'payment_value' => $payment->payment_value,
            'payment_date' => $date,
            'payment_time' => $time,
            'payment_datetime' => $payment->payment_datetime,
            'file_payment' => $payment->file_payment,
            'remark' => $payment->remark,
            'disburse_id' => $disburseId
        ];

        return view('disburse.disburse_detail_edit', compact('paymentData'));
    }
    public function detail_update(Request $request, $paymentId)
    {
        Payment::find($paymentId)->update(
            [
                'payment_datetime' => $request->paymentDate . " " . $request->paymentTime,
                'payment_value' => $request->paymentValue,
                'remark' => $request->remark
            ]
        );
        $disburseId = $request->disburseId; // ส่ง disburse id มาเพื่อให้โหลดหน้า detail ซ้ำได้
        return redirect()->action(
            [DisburseController::class, 'detail'],
            ['id' => $disburseId]
        )->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');;
    }
    public function detail_delete($paymentId, $disburseId)
    {
        Payment::find($paymentId)->delete();

        return redirect()->action(
            [DisburseController::class, 'detail'],
            ['id' => $disburseId]
        )->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');;
    }
    public function mobiledetail($disburseId)
    {
        $disburse = Disburse::find($disburseId);
        $payment = Payment::where('disburse_id', $disburseId)->get(); // เอา disburseId เข้าไปค้นว่ามีมั้ย

        $disburseData = [
            'id' => $disburse->id,
            'disburse_name' => $disburse->disburse_name,
            'disburse_value' => $disburse->disburse_value,
            'disburse_date' => $disburse->disburse_date,
            'received_date' => $disburse->received_date,
            'payment_ready_date' => $disburse->payment_ready_date,
            'gr_status' => $disburse->gr_status,
            'payment_status' => $disburse->payment_status,
            'remark' => $disburse->remark,
            'file_sws' => $disburse->file_sws,
            'file_vendor' => $disburse->file_vendor,
            'vendor_id' => $disburse->vendor->id,
            'vendor_name' => $disburse->vendor->vendor_name . " - " . $disburse->vendor->vendor_sname,
            'vendor_file' => $disburse->vendor->file_account,
            'vendor_account' => $disburse->vendor->vendor_account,
            'vendor_bank' => $disburse->vendor->vendor_bank,
            'user' => $disburse->user->name,
        ];

        $sumValue = 0;
        foreach ($payment as $row) {
            $sumValue += $row->payment_value;
        }
        return view('mobiledetail.mobile_detail', compact('disburseData', 'payment', 'sumValue'));
    }
}
