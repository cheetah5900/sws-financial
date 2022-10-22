@extends('layout')
@section('content')
<div class="container card-plane pb-5" btn-red>
    <div class="row">
        <div class="col">
            <a href="" class=" btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <p class="h3">ใช้ยอด Advance ของ {{$advanceData->vendor->vendor_sname}} ({{$advanceData->vendor->vendor_name}})</p>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <p class="h5"><b>ยอดทั้งหมด</b> {{number_format($advanceData->advance_value,2)}} บาท</p>
            <p class="h5"><b>ยอดที่ใช้ไป</b> {{number_format($advanceData->advance_used,2)}} บาท</p>
            <p class="h5"><b>ยอดคงเหลือ</b> {{number_format($advanceData->advance_value - $advanceData->advance_used,2)}} บาท</p>
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
    <div class="row mt-5 asset-stats">
        <div class="col">
            <form action="advance/updateavuse" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ยอดที่จะใช้ <span class="text-red">*</span></td>
                        <td><input type="text" name="advanceValue" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>เบิกจ่ายที่จะใช้</td>
                        <td>
                            <select class="form-control" name="disburseId" id="">
                                @foreach($disburseSelected as $row)
                                <option value="{{$row['id']}}">{{$row['id']}} - {{$row['disburse_name']}} คงเหลือ {{number_format($row['value'],2)}} บาท</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" id=""></td>
                    </tr>
                </table>
                <div class="text-center">
                    <input type="hidden" name="type" value="(ยอด advance)">
                    <input type="hidden" name="advanceId" value="{{$advanceData->id}}" id="">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <p class="h3">รายการที่ใช้ไป</p>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col text-right mt-3">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ยอดใช้ไป</td>
                        <td>รายการเบิกจ่ายที่ใช้</td>
                        <td>วันที่โอน</td>
                        <td>หมายเหตุ</td>
                        <td>รายละเอียดเบิกจ่าย</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($advanceUseArr as $row)
                    <tr>
                        <td>{{$row['advance_value']}}</td>
                        <td>{{$row['disburse_name']}}</td>
                        <td>{{$row['advance_date']}}</td>
                        <td>{{$row['remark']}}</td>
                        <td><a href="disburse/detail/{{$row['disburse_id']}}" target="_blank" class="btn btn-blue">รายละเอียด</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
@stop