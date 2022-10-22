@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขการเบิกจ่าย</p>
        </div>
    </div>
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="disburse/detail/update/{{$paymentData['id']}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped table-bordered">
                    <tr>
                        <td width="40%">ยอดที่จ่าย <span class="text-danger">*</span></td>
                        <td><input type="text" name="paymentValue" class="form-control" value="{{$paymentData['payment_value']}}"></td>
                    </tr>
                    <tr>
                        <td>วันที่จ่าย <span class="text-danger">*</span></td>
                        <td><input type="date" name="paymentDate" class="form-control" value="{{$paymentData['payment_date']}}"></td>
                    </tr>
                    <tr>
                        <td>เวลาที่จ่าย <span class="text-danger">*</span></td>
                        <td><input type="time" name="paymentTime" class="form-control" id="" value="{{$paymentData['payment_time']}}"></td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" id="" value="{{$paymentData['remark']}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <input type="hidden" name="disburseId" value="{{$paymentData['disburse_id']}}">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="" class=" btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
@stop