@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
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
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="vendor/update/{{$vendor->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ชื่อผู้รับเงิน <span class="text-red">*</span></td>
                        <td><input type="text" name="vendorName" class="form-control" id="" value="{{$vendor->vendor_name}}"></td>
                    </tr>
                    <tr>
                        <td>ชื่อย่อ <span class="text-red">*</span></td>
                        <td><input type="text" name="vendorSname" class="form-control" value="{{$vendor->vendor_sname}}"></td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" id="" value="{{$vendor->remark}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="vendor" class="btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>


</div>

<script src="{{asset('js/app.js')}}"></script>
@stop