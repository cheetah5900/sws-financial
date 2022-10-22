<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{

    function index()
    {
        $data = Provider::all()->sortByDesc('id');
        return view('provider.provider', compact('data'));
    }
    public function add(Request $request)
    {
        $request->validate(
            [
                'providerName' => 'required',
                'providerBank' => 'required',
                'providerBankNumber' => 'required',
            ],
            [
                'providerName.required' => "กรุณาเพิ่มชื่อเต็มโรงงาน",
                'providerBank.required' => "กรุณาเพิ่มธนาคารของโรงงาน",
                'providerBankNumber.required' => "กรุณาเพิ่มเลขบัญชีโรงงาน",
            ]
        );

        //? เพิ่มข้อมูลเข้าฐานข้อมูล
        $provider = new Provider;
        $provider->provider_name = $request->providerName;
        $provider->provider_shortname = $request->providerSname;
        $provider->provider_bank = $request->providerBank;
        $provider->provider_bank_number = $request->providerBankNumber;
        $provider->provider_bank_file = '';
        $provider->save();

        //? เอาเลข providerId ตัวล่าสุดออกมาเพื่อนำไปสำหรับอัพเดทรูปภาพ
        $lastProviderId = Provider::orderBy('id', 'DESC')->first();
        $lastProviderIdResult = $lastProviderId->id;

        // TODO อัพโหลดรูปภาพ
        $providerBankFile = $request->file('providerBankFile');
        if (isset($providerBankFile)) {
            //? ที่อยู่ไฟล์ภาพ
            $uploadLocation = "file/provider/";

            //? ข้อมูลไฟล์ภาพ
            $imgExtFile = strtolower($providerBankFile->getClientOriginalExtension());
            $imgprovider = $lastProviderIdResult . "." . $imgExtFile;
            $pathprovider = $uploadLocation . $imgprovider;

            //? อัพโหลดไฟล์ภาพ
            $providerBankFile->move($uploadLocation, $imgprovider);

            provider::find($lastProviderIdResult)->update([
                'provider_bank_file' => $pathprovider,
            ]);
        }
        return redirect()->back()->with('success', 'เพิ่มโรงงานสำเร็จ');
    }
    public function edit($providerId)
    {
        $provider = Provider::find($providerId);
        return view('provider/provider_edit', compact('provider'));
    }
    public function update($providerId, Request $request)
    {
        Provider::find($providerId)->update([
            'provider_name' => $request->providerName,
            'provider_shortname' => $request->providerShortName,
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }
}
