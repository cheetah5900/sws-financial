@extends('layout')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <p class="h3">แก้ไขผู้รับเงิน : {{$vendor->vendor_name}}</p>
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
    <div class="row">
        <div class="col-6">
            <a href="vendor" class="btn btn-secondary">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col mt-3">
            <form action="vendor/update/{{$vendor->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped table-bordered" style="width:100%">
                    <tr>
                        <td>ชื่อผู้รับเงิน <span class="text-danger">*</span></td>
                        <td><input type="text" name="vendorName" class="form-control" id="" value="{{$vendor->vendor_name}}"></td>
                    </tr>
                    <tr>
                        <td>ชื่อย่อ <span class="text-danger">*</span></td>
                        <td><input type="text" name="vendorSname" class="form-control" value="{{$vendor->vendor_sname}}"></td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" id="" value="{{$vendor->remark}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>

<script src="{{asset('js/app.js')}}"></script>
@stop