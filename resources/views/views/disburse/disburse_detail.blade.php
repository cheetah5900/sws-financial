@extends('layout')
@section('content')
<div class="container card-plane pb-5">
    <div class="row mb-3">
        <div class="col">
            <a href="" class=" btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p class="h3">รายละเอียด : {{$disburseData['disburse_name']}}</p>
        </div>
    </div>

    <!-- 
        //TODO ถ้ามี error อะไรเข้ามาก็ช่างจะเอาออกมาแสดงทั้งหมดเลย
    -->
    @if ($errors->any())
    <div class="col-mb-12">
        <div class="form-control-wrap">
            <div class="alert alert-icon alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif

    <div class="row my-4">
        <div class="col">
            <p class="h3">ตารางรายละเอียด</p>
        </div>
    </div>
    <div class="row asset-stats mb-5">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th>ชื่อเบิกจ่าย</th>
                    <td>{{$disburseData['disburse_name']}}</td>
                    <th>ผู้ยื่นเบิก</th>
                    <td>{{$disburseData['user']}}</td>
                    <th>ผู้รับเงิน</th>
                    <td>{{$disburseData['vendor_sname']}} ({{$disburseData['vendor_name']}})</td>
                </tr>
                <tr>
                    <th>ยอดเบิก</th>
                    <td>{{number_format($disburseData['disburse_value'],2)}} บาท</td>
                    <th>จ่ายไปแล้ว</th>
                    <td>{{number_format($sumValue,2)}} บาท</td>
                    <th>คงเหลือ</th>
                    <td>{{number_format($disburseData['disburse_value']-$sumValue,2)}} บาท</td>
                </tr>
                <tr>
                    <th>เลขบัญชีผู้รับเงิน</th>
                    <td>

                        {{$disburseData['vendor_account']}} ({{$disburseData['vendor_bank']}})
                        @if($disburseData['file_account'] != '')
                        <a href="{{asset($disburseData['file_account'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                        @else
                        ไม่มีไฟล์
                        @endif
                    </td>
                    <th>สถานะ GR</th>
                    <td>{{$disburseData['gr_status']}}</td>
                    <th>สถานะโอน</th>
                    <td>{{$disburseData['payment_status']}}</td>
                </tr>
                <tr>
                    <th>วันที่ขอเบิก</th>
                    <td>{{$disburseData['disburse_date']}}</td>
                    <th>วันที่รับเงิน</th>
                    <td>{{$disburseData['received_date']}}</td>
                    <th>วันที่สะดวกโอน</th>
                    <td>{{$disburseData['payment_ready_date']}}</td>
                </tr>
                <tr>
                    <th>ไฟล์เบิกผู้รับเหมา</th>
                    <td>
                        <a href="{{asset($disburseData['file_vendor'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                    </td>
                    <th>ไฟล์เบิกศรีสมวงศ์</th>
                    <td>
                        @if($disburseData['file_sws'] != '')
                        <a href="{{asset($disburseData['file_sws'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                        @else
                        ไม่มีไฟล์
                        @endif
                    </td>
                    <th>หมายเหตุ</th>
                    <td>{{$disburseData['remark']}}</td>
                </tr>
            </table>
        </div>
    </div>
    @if(session("success"))
    <div class="row">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('success')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row my-3">
        <div class="col-6">
            <p class="h3">ตารางเบิกจ่าย</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-green" data-toggle="modal" data-target="#exampleModalCenter">เพิ่มยอดโอน</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>ครั้งที่</td>
                        <td>จำนวนที่จ่าย</td>
                        <td>วันที่จ่าย</td>
                        <td>ไฟล์ใบเสร็จ</td>
                        <td>หมายเหตุ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paymentForLoop as $row)
                    <tr>
                        <td>{{$row['payment_times']}}</td>
                        <td>{{number_format($row['payment_value'],2)}}</td>
                        <td>{{$row['payment_datetime']}}</td>
                        <td><a href="{{asset($row['file_payment'])}}" class="btn btn-blue" target="_blank">ดูไฟล์</a></td>
                        <td>{{$row['remark']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มยอดโอน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="disburse/payment/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="white-text">
                                <tr>
                                    <td width="40%">ยอดที่จ่าย <span class="text-danger">*</span></td>
                                    <td><input type="text" name="paymentValue" class="form-control" id="disburseValue"></td>
                                </tr>
                                <tr>
                                    <td>วันที่จ่าย <span class="text-danger">*</span></td>
                                    <td><input type="date" name="paymentDate" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>เวลาที่จ่าย <span class="text-danger">*</span></td>
                                    <td><input type="time" name="paymentTime" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ไฟล์โอนเงิน <span class="text-danger">*</span></td>
                                    <td><input type="file" name="filePayment" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                            </table>
                            <div class="text-center my-3">
                                <input type="hidden" name="disburseId" value="{{$disburseData['id']}}" id="">
                                <button type="submit" class="btn btn-green">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<script src="{{asset('js/app.js')}}"></script>
@stop