@extends('layout')
@section('content')
<div class="container card-plane my-5 pb-3" style="max-width:90%;">
    @if(Auth::user()->id === 1 || Auth::user()->id === 2)
    <div class="row">
        <div class="col-3 text-left">
            <a href="linenotify" class="btn btn-gray">ส่งแจ้งเตือนเข้ากลุ่ม</a>
        </div>
    </div>
    @endif
    <!-- ตัวแปร success ย้อนกลับของ การเพิ่มการเบิกจ่าย -->
    @if(session("success"))
    <div class="row mt-5">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('success')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif

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
    <div class="row mt-5 mb-5">
        <div class="col-6 text-left">
            <p class="h3">รายการเบิกจ่าย</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-green" data-toggle="modal" data-target="#exampleModalCenter">เพิ่มเบิกจ่าย</button>
            @if(Auth::user()->id === 1 || Auth::user()->id === 2)
            <a href="vendor" class="btn btn-yellow">จัดการผู้รับเงิน</a>
            @endif
        </div>
    </div>
    <div class="row asset-stats">
        <div class="col">
            <table id="exampledesc" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th style="width:5%">ผู้ยื่นเบิก</th>
                        <th style="width:26%">ชื่อเบิกจ่าย</th>
                        <th style="width:7%">จำนวน</th>
                        <th style="width:7%">โอนแล้ว</th>
                        <th style="width:7%">คงเหลือ</th>
                        <th style="width:5%">ผู้รับเงิน</th>
                        <th style="width:7%">วันที่รับเงิน</th>
                        <th style="width:7%">วันที่สะดวกโอน</th>
                        <th style="width:6%">สถานะ GR</th>
                        <th style="width:6%">สถานะโอน</th>
                        <th style="width:8%">หมายเหตุ</th>
                        <th style="width:10%">ดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultDisburse as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['disburse_name']}}</td>
                        <td>{{number_format($row['value'],2)}}</td>
                        <td>{{number_format($row['sumvalue'],2)}}</td>
                        <td>{{number_format($row['value']-$row['sumvalue'],2)}}</td>
                        <td><a href="#" data-toggle="tooltip" data-placement="top" title="{{$row['vendor']}}">{{$row['vendors']}}</a></td>
                        <td>
                            @if ($row['received_date'] != '')
                            <!-- ถ้ามีวันที่รับเงินจะแสดงออกมา-->
                            <a href="#" data-toggle="tooltip" data-placement="top" title="{{$row['received_date']}}">วันที่รับเงิน</a>
                            @endif
                        </td>
                        <td>{{$row['payment_ready_date']}}</td>
                        <td>{{$row['gr_status']}}</td>
                        <td>
                            <h5><span class="badge badge-{{$row['color_status']}}"> {{$row['payment_status']}}</span></h5>
                        </td>
                        <td>
                            @if ($row['remark'] != '')
                            <!-- ถ้ามีหมายเหตุจะแสดงหมายเหตุออกมา-->
                            <a href="#" data-toggle="tooltip" data-placement="top" title="{{$row['remark']}}">หมายเหตุ</a>
                            @endif
                        </td>
                        <td>
                            <a href="disburse/detail/{{$row['id']}}" class="btn btn-blue"><i class="bi bi-info-circle"></i></a>
                            <!-- ถ้าไอดีเป็นชาตรีหรือพี่ฟ้าจะอนุญาตให้แก้ไขข้อมูลต่างๆได้ -->
                            @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                            <a href="disburse/edit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                            @endif
                            @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                            <a href="disburse/delete/{{$row['id']}}" onclick="return confirm('ยืนยันลบหรือไม่?')" class="btn btn-red"><i class="bi bi-trash"></i></a>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr class="mt-5">
    @include('../component/disburse/advance_table')
    @include('../component/disburse/income_table')
    @include('../component/disburse/disburse_modal')
</div>

@include('../component/disburse/advance_modal')
@include('../component/disburse/income_modal')
</div>
</div>

<script>
    function advanceUse(id) {
        $('#advanceUseId').val(id) // กำหนดให้ตัวที่มี id เป็น #advanceUse มีค่าเท่ากับตัวที่รับมา (id)
    }
    // LiveSearch
    $(document).ready(function() {
        $('#liveSearch1').select2({
            width: '100%'
        });
        $('#liveSearch2').select2({
            width: '100%'
        });
        $('#liveSearch3').select2({
            width: '100%'
        });
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
@stop