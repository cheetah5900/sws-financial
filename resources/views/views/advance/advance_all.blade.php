@extends('layout')
@section('content')
<div class="container" style="max-width:90%;">
<div class="row">
    <div class="col">
        <a href="/" class="btn btn-secondary">ย้อนกลับ</a>
    </div>
</div>
<div class="row my-4">
        <div class="col">
            <p class="h3">ยอด Advance ทั้งหมด</p>
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
    <div class="row">
        <div class="col text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#advanceModal">เพิ่มยอด Advance</button>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col text-right mt-3">
            <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>ผู้รับเงิน</td>
                        <td>ยอด advance</td>
                        <td>ยอดใช้ไป</td>
                        <td>ยอดคงเหลือ</td>
                        <td>วันที่โอน</td>
                        <td>หมายเหตุ</td>
                        <td>ไฟล์โอน</td>
                        <td>ดำเนินการ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultAdvance as $row)
                    <tr>
                        <td>{{$row['vendor']}}</td>
                        <td>{{number_format($row['advance_value'],2)}}</td>
                        <td>{{number_format($row['advance_used'],2)}}</td>
                        <td>{{number_format($row['advance_remain'],2)}}</td>
                        <td>{{$row['advance_date']}}</td>
                        <td>{{$row['remark']}}</td>
                        <td><a href="{{asset($row['file_advance'])}}" target="_blank" class="btn btn-info">ดูไฟล์</a></td>
                        <td>

                            @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                            <a href="/advance/avuse/{{$row['id']}}" class="btn btn-outline-primary">ใช้ยอด</a>
                            @endif
                            <a href="/advance/avdetail/{{$row['id']}}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                            @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                            <a href="/advance/avedit/{{$row['id']}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@include('../component/disburse/advance_modal')
</div>
</div>

<script src="{{asset('js/app.js')}}"></script>
@stop