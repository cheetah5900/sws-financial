@extends('layout')
@section('content')
<div class="container" style="max-width:80%;">
    <div class="row mt-3">
        <div class="col">
            <p class="h3">แก้ไขยอดรายรับ : {{$income->advance_value}} บาท</p>
        </div>
    </div>
    <!-- ตัวแปร success ย้อนกลับของ การเพิ่มการเบิกจ่าย -->
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

    <hr class="mt-3">
    <form action="/advance/update/{{$income->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-striped table-bordered" style="width:100%">
            <tr>
                <td>ยอดรายรับ<span class="text-danger">*</span></td>
                <td><input type="text" name="advanceValue" class="form-control" value="{{number_format($income->advance_value,2)}}"></td>
            </tr>
            <td>วันที่โอน</td>
            <td><input type="date" name="advanceDate" class="form-control" id="" value="{{$income->advance_date}}"></td>
            </tr>
            </tr>
            <td>หมายเหตุ</td>
            <td><input type="text" name="remark" class="form-control" id="" value="{{$income->remark}}"></td>
            </tr>
        </table>
        <div class="text-center">
            <input type="hidden" name="vendorId" value="{{$income->vendor_id}}">
            <button type="submit" class="btn btn-success">บันทึก</button>
            <a href="" class=" btn btn-secondary">ปิด</a>
        </div>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
@stop