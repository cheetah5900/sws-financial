@extends('layout')
@section('content')
<div class="container card-plane pb-5">
    <div class="row mt-3">
        <div class="col">
            <p class="h3">แก้ไขยอดรายรับ : {{number_format($income->advance_value,2)}} บาท</p>
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

    <div class="row asset-stats my-3">
        <div class="col">
            <form action="/advance/update/{{$income->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ยอดรายรับ<span class="text-red">*</span></td>
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
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="" class=" btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
@stop