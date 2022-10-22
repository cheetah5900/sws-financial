<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        $vendor = Vendor::all();
        return view('vendor/vendor', compact('vendor'));
    }
    public function add(Request $request)
    {
        $request->validate(
            [
                'vendorName' => 'required',
                'vendorSname' => 'required',
                'vendorAccount' => 'required',
            ],
            [
                'vendorName.required' => "กรุณาเพิ่มชื่อเต็มผู้รับเงิน",
                'vendorSname.required' => "กรุณาเพิ่มชื่อย่อผู้รับเงิน",
                'vendorAccount.required' => "กรุณาเพิ่มเลขบัญชีผู้รับเงิน",
            ]
        );

        //? เพิ่มข้อมูลเข้าฐานข้อมูล
        $vendor = new Vendor;
        $vendor->vendor_name = $request->vendorName;
        $vendor->vendor_sname = $request->vendorSname;
        $vendor->vendor_bank = $request->vendorBank;
        $vendor->vendor_account = $request->vendorAccount;
        $vendor->remark = $request->remark;
        $vendor->file_account = '';
        $vendor->save();

        //? เอาเลข vendorId ตัวล่าสุดออกมาเพื่อนำไปสำหรับอัพเดทรูปภาพ
        $lastVendorId = Vendor::orderBy('id', 'DESC')->first();
        $lastVendorIdResult = $lastVendorId->id;

        // TODO อัพโหลดรูปภาพ
        $fileAccount = $request->file('fileAccount');
        if (isset($fileAccount)) {
            //? ที่อยู่ไฟล์ภาพ
            $uploadLocation = "file/vendor/";

            //? ข้อมูลไฟล์ภาพ
            $imgExtFile = strtolower($fileAccount->getClientOriginalExtension());
            $imgVendor = $lastVendorIdResult . "." . $imgExtFile;
            $pathVendor = $uploadLocation . $imgVendor;

            //? อัพโหลดไฟล์ภาพ
            $fileAccount->move($uploadLocation, $imgVendor);

            Vendor::find($lastVendorIdResult)->update([
                'file_account' => $pathVendor,
            ]);
        }
        return redirect()->back()->with('success', 'เพิ่มผู้รับเงินสำเร็จ');
    }
    public function edit($vendorId)
    {
        $vendor = Vendor::find($vendorId);
        return view('vendor/vendor_edit', compact('vendor'));
    }
    public function update($vendorId, Request $request)
    {
        Vendor::find($vendorId)->update([
            'vendor_name' => $request->vendorName,
            'vendor_sname' => $request->vendorSname,
            'remark' => $request->remark,
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }
}
