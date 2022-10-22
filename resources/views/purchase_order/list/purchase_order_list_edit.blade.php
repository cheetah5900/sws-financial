@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขข้อมูลรายการ PO</p>
        </div>
    </div>
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="po/list/update/{{$data['id']}}" method="post">
                @csrf
                <table class="table table-striped table-bordered">
                    <tr>
                    <tr>
                        <td>ชื่ออุปกรณ์</td>
                        <td><input type="text" name="deviceName" class="form-control" value="{{$data['device_name']}}"></td>
                    </tr>
                    <tr>
                        <td>จำนวน</td>
                        <td><input type="number" name="amount" class="form-control" value="{{$data['amount']}}"></td>
                    </tr>
                    <tr>
                        <td>ราคาต่อหน่วย</td>
                        <td><input type="text" name="pricePerUnit" class="form-control" value="{{$data['priceperunit']}}"></td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" value="{{$data['remark']}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <input type="hidden" name="poId" value="{{$data['po_id']}}" id="">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="" class=" btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
@stop