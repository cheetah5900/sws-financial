@extends('layout')
@section('content')
<div class="container card-plane pb-5">
    <div class="row">
        <div class="col">
            <a href="" class=" btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <p class="h3">รายละเอียดการใช้<br>ยอดรายรับ {{number_format($incomeData['advance_value'],2)}} บาท</p>
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
    <div class="row my-3 asset-stats">
        <div class="col">
            <table class="table table-striped table-bordered teble-center">
                <tr>
                    <th>ยอดรายรับ</th>
                    <td>{{number_format($incomeData['advance_value'],2)}} บาท</td>
                    <th style="width:20%">ผู้เพิ่มยอด</th>
                    <td>{{$incomeData['name']}}</td>
                </tr>
                <tr>
                    <th>ใช้ไปแล้ว</th>
                    <td>{{number_format($incomeData['advance_used'],2)}} บาท</td>
                    <th>วันที่โอน</th>
                    <td>{{$incomeData['advance_date']}}</td>
                </tr>
                <tr>
                    <th>คงเหลือ</th>
                    <td>{{number_format($incomeData['advance_remain'],2)}} บาท</td>
                    <th>หมายเหตุ</th>
                    <td>{{$incomeData['remark']}}</td>
                </tr>
                <tr>
                    <th>ไฟล์ยอดรายรับ</th>
                    <td>
                        <a href="{{asset($incomeData['file_advance'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
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
    <div class="row my-3">
        <div class="col text-right">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ยอดใช้ไป</td>
                        <td>รายการเบิกจ่ายที่ใช้</td>
                        <td>วันที่โอน</td>
                        <td>ไฟล์สลิปโอน</td>
                        <td>หมายเหตุ</td>
                        <td>รายละเอียดเบิกจ่าย</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incomeUse as $row)
                    <tr>
                        <td>{{$row['advance_value']}}</td>
                        <td>{{$row['disburse']}}</td>
                        <td>{{$row['advance_date']}}</td>
                        <td>{{$row['remark']}}</td>
                        <td>
                            <a href="{{asset($row['file_advance'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                        </td>
                        <td><a href="/disburse/detail/{{$row['disburse_id']}}" target="_blank" class="btn btn-blue">รายละเอียด</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
@stop