@extends('layout')
@section('content')
<div class="container card-plane my-5 pb-3" style="max-width:90%;">
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
    <!-- ตัวแปร error ย้อนกลับการเพิ่ม po -->
    @if(session("error"))
    <div class="row mt-5">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-danger">
                    <strong>{{session('error')}}</strong>
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
    <div class="row mb-5">
        <div class="col-6 text-left">
            <p class="h3">PO</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-green" data-toggle="modal" data-target="#exampleModalCenter">เพิ่ม po</button>
            <a href="provider" class="btn btn-yellow">จัดการร้านขายของ</a>
        </div>
    </div>
    <div class="row asset-stats">
        <div class="col">
            <table id="exampledesc" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:5%">id</th>
                        <th style="width:5%">เลข PO</th>
                        <th style="width:26%">โรงงาน</th>
                        <th style="width:7%">วันที่ PO</th>
                        <th style="width:7%">เครดิต</th>
                        <th style="width:7%">หมายเหตุ</th>
                        <th style="width:5%">ไฟล์</th>
                        <th style="width:10%">ดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['po_no']}}</td>
                        <td>{{$row['provider_id']}}</td>
                        <td>{{$row['po_date']}}</td>
                        <td>{{$row['credit']}}</td>
                        <td>
                            @if ($row['remark'] != '')
                            <!-- ถ้ามีหมายเหตุจะแสดงหมายเหตุออกมา-->
                            <a href="#" data-toggle="tooltip" data-placement="top" title="{{$row['remark']}}">หมายเหตุ</a>
                            @endif
                        </td>
                        <td>
                            @if ($row['po_file'] != '')
                            <!-- ถ้ามีหมายเหตุจะแสดงหมายเหตุออกมา-->
                            <a href="{{asset($row['po_file'])}}" target="_blank" class="">ไฟล์</a>
                            @endif
                        </td>
                        <td>
                            <a href="po/detail/{{$row['id']}}" class="btn btn-blue"><i class="bi bi-info-circle"></i></a>
                            <!-- ถ้าไอดีเป็นชาตรีหรือพี่ฟ้าจะอนุญาตให้แก้ไขข้อมูลต่างๆได้ -->
                            <a href="po/edit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr class="mt-5">
    @include('../component/po/po_modal')
</div>

</div>
</div>

<script>
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