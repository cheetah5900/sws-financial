@extends('layout')
@section('content')
<div class="container card-plane pb-5" btn-red>
    <div class="row">
        <div class="col">
            <a href="index.php" class="btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <p class="h3">รายละเอียดการใช้<br>ยอด Advance {{number_format($advanceData['advance_value'],2)}} บาท <br> ของ {{$advanceData['vendor']}}</p>
        </div>
    </div>
    <!-- ตัวแปร success ย้อนกลับของ การเพิ่มยอด Advance -->

    @if(session("successadvance"))
    <div class="row">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('successadvance')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row asset-stats">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th>ยอด Advance</th>
                    <td>{{number_format($advanceData['advance_value'],2)}} บาท</td>
                    <th style="width:20%">ผู้เพิ่มยอด</th>
                    <td>{{$advanceData['name']}}</td>
                </tr>
                <tr>
                    <th>ใช้ไปแล้ว</th>
                    <td>{{number_format($advanceData['advance_used'],2)}} บาท</td>
                    <th>ผู้รับเงิน</th>
                    <td>{{$advanceData['vendor']}}</td>
                </tr>
                <tr>
                    <th>คงเหลือ</th>
                    <td>{{number_format($advanceData['advance_remain'],2)}} บาท</td>
                    <th>เลขบัญชีผู้รับเงิน</th>
                    <td>
                        @if($advanceData['file_account'] != '')
                        <a href="{{asset($advanceData['file_account'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                        @else
                        ไม่มีไฟล์สมุดบัญชี
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>วันที่โอน</th>
                    <td>{{$advanceData['advance_date']}}</td>
                    <th>หมายเหตุ</th>
                    <td>{{$advanceData['remark']}}</td>
                </tr>
                <tr>
                    <th>ไฟล์ Advance</th>
                    <td>
                        <a href="{{asset($advanceData['file_advance'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <p class="h3">รายการที่ใช้ไป</p>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col text-right mt-3">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ยอดใช้ไป</td>
                        <td>รายการเบิกจ่ายที่ใช้</td>
                        <td>วันที่โอน</td>
                        <td>หมายเหตุ</td>
                        <td>รายละเอียดเบิกจ่าย</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($advanceUseArr as $row)
                    <tr>
                        <td>{{$row['advance_value']}}</td>
                        <td>{{$row['disburse_name']}}</td>
                        <td>{{$row['advance_date']}}</td>
                        <td>{{$row['remark']}}</td>
                        <td><a href="disburse/detail/{{$row['disburse_id']}}" target="_blank" class="btn btn-blue">รายละเอียด</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
@stop