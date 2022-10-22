<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchaseorder;
use App\Models\Purchaseorderlist;
use App\Models\Purchaseorderfile;
use App\Models\Provider;
use App\Library\Common;

class PurchaseOrderController extends Controller
{
    function index()
    {
        $purchaseOrder = Purchaseorder::all()->sortByDesc('id');
        $provider = Provider::all(); // เอาชื่อโรงงานมาแสดงให้เลือก

        $purchaseOrderDocs = [];
        foreach ($purchaseOrder as $po) {


            $date = $po->po_date;

            if ($date != '' && $date != '0000-00-00' && $date != NULL) {
                // เปลี่ยนวัน ISO ให้กลายเป็นวันของไทย
                $newDate = Common::dateThai($date);
            } else {
                $newDate = "";
            }
            $doc = [
                'id' => $po->id,
                'po_no' => $po->po_no,
                'provider_id' => $po->provider->provider_name,
                'po_date' => $newDate,
                'credit' => $po->credit,
                'po_file' => $po->po_file,
                'disburse_id' => $po->disburse_id,
                'remark' => $po->remark,
            ];
            array_push($purchaseOrderDocs, $doc);
        }
        $data = $purchaseOrderDocs;

        return view('purchase_order.purchase_order', compact('data', 'provider'));
    }

    //!
    //! PO
    //!

    function add(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate(
            [
                'poNo' => 'required',
            ],
            [
                'poNo.required' => 'กรุณาเพิ่มเลข PO'
            ]
        );
        // เช็คซ้ำก่อนให้เพิ่มลงฐานข้อมูล
        $poNo = $request->poNo;

        //เช็คว่า poNo ที่เพิ่มเข้ามาซ้ำหรือไม่ ถ้าซ้ำจะกลับไปหน้าเดิมแล้วแจ้ง error
        $checkDuplicate = Purchaseorder::where('po_no', $poNo)->get();
        if (count($checkDuplicate) > 0) {
            return redirect()->back()->with('error', 'เลข PO ซ้ำ');
        }

        // เพิ่มข้อมูลเข้าฐานข้อมูล
        $po = new Purchaseorder();
        $po->po_no = $request->poNo;
        $po->po_date = $request->poDate;
        $po->provider_id = $request->providerId;
        $po->credit = $request->credit;
        $po->remark = $request->remark;
        $po->save();


        //? ดึง id ล่าสุดของตาราง purchase order มาเพื่อไปเป็นคีย์นอกของตารางต่างๆ
        $lastPoId = Purchaseorder::orderBy('id', 'DESC')->first(); // ดึง  purchase order id ที่เพิ่มเข้าไปในฐานข้อมูลตัวล่าสุดออกมา
        $lastPoIdResult = $lastPoId->id;

        //! อัพโหลดรูปภาพ

        //? รับรูปภาพ
        $poFile = $request->file('poFile');

        //? อัพโหลดไฟล์ภาพ
        $uploadLocation = "file/po/" . $lastPoIdResult . "/"; // ที่เก็บไฟล์

        if ($poFile) {
            //? รูปที่ 1
            $imgExtPoFile = strtolower($poFile->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgPoFileName = $lastPoIdResult . "_po." . $imgExtPoFile; // รวมชื่อและนามสกุลไฟล์
            $pathPoFile = $uploadLocation . $imgPoFileName; // path ของไฟล์
            $poFile->move($uploadLocation, $imgPoFileName);
        } else {
            $pathPoFile = "";
        }

        //? อัพเดท path ของไฟล์ที่อัพโหลดเข้าไป ไปยังตาราง purchase order
        Purchaseorder::find($lastPoIdResult)->update([
            'po_file' => $pathPoFile
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    function edit($poId)
    {

        $data = Purchaseorder::find($poId);
        $provider = Provider::all();
        return view('purchase_order.purchase_order_edit', compact('data', 'provider'));
    }

    function update(Request $request, $poId)
    {
        //? อัพเดท path ของไฟล์ที่อัพโหลดเข้าไป ไปยังตาราง purchase order
        Purchaseorder::find($poId)->update([
            'po_no' => $request->poNo,
            'po_date' => $request->poDate,
            'provider_id' => $request->providerId,
            'credit' => $request->credit,
            'remark' => $request->remark,
        ]);
        return redirect()->route('po')->with('success', 'แก้ไขข้อมูลเรียบร้อย');
    }
    function detail($poId)
    {
        //TODO ดึงสถานะการเงินมาแสดงในรายละเอีย PO แต่ละรายการ
        // $paymentStatus = Disburse::find($purchaseOrder->disburse_id);


        // $paymentStatus = $purchaseOrder->payment_status;
        // // ตรวจสอบว่าสถานะ PO เป็นอะไรจะได้ใส่สีให้ถูกต้องตามนั้น
        // if ($paymentStatus == 'ยังไม่จ่าย') {
        //     $colorStatus = "danger";
        // } elseif ($paymentStatus == 'รับของครบ') {
        //     $colorStatus = "success";
        // } elseif ($paymentStatus == 'รอรับของ') {
        //     $colorStatus = "warning";
        // } else {
        //     $colorStatus = "seccondary";
        // }

        $purchaseOrder = Purchaseorder::find($poId);
        $purchaseOrderList = Purchaseorderlist::where('po_id', $poId)->get();
        $purchaseOrderFile = Purchaseorderfile::where('po_id', $poId)->get();

        $purchaseOrderListDocs = [];
        $k = 1;
        foreach ($purchaseOrderList as $row) {

            $doc = [
                'no' => $k,
                'id' => $row->id,
                'device_name' => $row->device_name,
                'amount' => $row->amount,
                'priceperunit' => $row->priceperunit,
                'remark' => $row->remark,
            ];
            $k++;
            array_push($purchaseOrderListDocs, $doc);
        }

        $purchaseOrderFileDocs = [];
        $k = 1;
        foreach ($purchaseOrderFile as $row) {

            $doc = [
                'no' => $k,
                'id' => $row->id,
                'file_type' => $row->file_type,
                'remark' => $row->remark,
                'file_upload' => $row->file_upload,
                'created_at' => $row->created_at,
            ];
            $k++;
            array_push($purchaseOrderFileDocs, $doc);
        }

        $data = [
            'id' => $purchaseOrder->id,
            'po_no' => $purchaseOrder->po_no,
            'po_date' => $purchaseOrder->po_date,
            'provider_name' => $purchaseOrder->provider->provider_name,
            'provider_bank_number' => $purchaseOrder->provider->provider_bank_number,
            'po_file' => $purchaseOrder->po_file,
            'payment_status' => $paymentStatus,
            'credit' => $purchaseOrder->credit,
            'remark' => $purchaseOrder->remark,
        ];
        return view('purchase_order.purchase_order_detail', compact('data', 'purchaseOrderListDocs', 'purchaseOrderFileDocs'));
    }


    //!
    //! PO LIST
    //!

    function addpolist(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate(
            [
                'deviceName' => 'required',
                'amount' => 'required',
                'pricePerUnit' => 'required',
            ],
            [
                'deviceName.required' => 'กรุณาเพิ่มชื่ออุปกรณ์',
                'amount.required' => 'กรุณาเพิ่มชื่ออุปกรณ์',
                'pricePerUnit.required' => 'กรุณาใส่ราคาต่อหน่วย',
            ]
        );

        // เพิ่มข้อมูลเข้าฐานข้อมูล
        $po = new Purchaseorderlist();
        $po->device_name = $request->deviceName;
        $po->amount = $request->amount;
        $po->priceperunit = $request->pricePerUnit;
        $po->remark = $request->remark;
        $po->po_id = $request->poId;
        $po->save();


        return redirect()->back()->with('successaddlist', 'บันทึกข้อมูลเรียบร้อย');
    }

    function editpolist($poListId)
    {
        $data = Purchaseorderlist::find($poListId);
        return view('purchase_order.list.purchase_order_list_edit', compact('data'));
    }

    function updatepolist(Request $request, $poListId)
    {
        $poId = $request->poId;

        //? อัพเดท path ของไฟล์ที่อัพโหลดเข้าไป ไปยังตาราง purchase order
        Purchaseorderlist::find($poListId)->update([
            'device_name' => $request->deviceName,
            'amount' => $request->amount,
            'priceperunit' => $request->pricePerUnit,
            'remark' => $request->remark,
        ]);
        return redirect()->route('podetail', $poId)->with('successlist', 'แก้ไขข้อมูลเรียบร้อย');
    }
    //!
    //! PO FILE
    //!

    //? เพิ่มไฟล์ PO ในหน้ารายละเอียด
    function addpofile(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate(
            [
                'fileUpload' => 'required',
            ],
            [
                'fileUpload.required' => 'กรุณาเพิ่มไฟล์',
            ]
        );

        // เพิ่มข้อมูลเข้าฐานข้อมูล
        $po = new Purchaseorderfile();
        $po->file_type = $request->fileType;
        $po->file_upload = $request->fileUpload;
        $po->remark = $request->remark;
        $po->po_id = $request->poId;
        $po->save();

        //? ดึง id ล่าสุดของตาราง purchase order มาเพื่อไปเป็นคีย์นอกของตารางต่างๆ
        $lastPoFileId = Purchaseorderfile::orderBy('id', 'DESC')->first(); // ดึง  purchase order id ที่เพิ่มเข้าไปในฐานข้อมูลตัวล่าสุดออกมา
        $lastPoIdFileResult = $lastPoFileId->id;

        $poId = $request->poId; // เอาค่า PO ID มาจากหน้า Detail จะได้เอาไปตั้งชื่อไฟล์

        //! อัพโหลดรูปภาพ

        //? รับรูปภาพ
        $fileUpload = $request->file('fileUpload');

        //? อัพโหลดไฟล์ภาพ
        $uploadLocation = "file/po/" . $lastPoIdFileResult . "/file" . "/"; // ที่เก็บไฟล์

        if ($fileUpload) {
            //? รูปที่ 1
            $imgExtPoFile = strtolower($fileUpload->getClientOriginalExtension()); // ดึงนามสกุลไฟล์ภาพ
            $imgPoFileName = $poId . "_." . $lastPoIdFileResult . $imgExtPoFile; // รวมชื่อและนามสกุลไฟล์
            $pathPoFile = $uploadLocation . $imgPoFileName; // path ของไฟล์
            $fileUpload->move($uploadLocation, $imgPoFileName);
        } else {
            $pathPoFile = "";
            exit;
        }

        //? อัพเดท path ของไฟล์ที่อัพโหลดเข้าไป ไปยังตาราง purchase order
        Purchaseorderfile::find($lastPoIdFileResult)->update([
            'file_upload' => $pathPoFile
        ]);

        return redirect()->back()->with('successfile', 'บันทึกข้อมูลเรียบร้อย');
    }
    function editpofile($poFileId)
    {
        $data = Purchaseorderfile::find($poFileId);
        return view('purchase_order.file.purchase_order_file_edit', compact('data'));
    }
    function updatepofile(Request $request, $poFileId)
    {
        $poId = $request->poId;

        //? อัพเดท path ของไฟล์ที่อัพโหลดเข้าไป ไปยังตาราง purchase order
        Purchaseorderfile::find($poFileId)->update([
            'file_type' => $request->fileType,
            'remark' => $request->remark,
        ]);
        return redirect()->route('podetail', $poId)->with('successfile', 'แก้ไขข้อมูลเรียบร้อย');
    }
}
