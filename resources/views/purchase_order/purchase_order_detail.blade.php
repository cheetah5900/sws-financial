@extends('layout')
@section('content')
<div class="container card-plane pb-5 my-5">
    <div class="row mb-3">
        <div class="col">
            <a href="" class=" btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            <p class="h3">รายละเอียด : {{$data['po_no']}}</p>
        </div>
    </div>

    <!-- 
        //TODO ถ้ามี error อะไรเข้ามาก็ช่างจะเอาออกมาแสดงทั้งหมดเลย
    -->
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
    <div class="row asset-stats mb-5">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th>เลข PO</th>
                    <td>{{$data['po_no']}}</td>
                    <th>วันที่ PO</th>
                    <td>{{$data['po_date']}}</td>
                    <th>เครดิต</th>
                    <td>{{$data['credit']}}</td>
                </tr>
                <tr>
                    <th>เครดิต</th>
                    <td>{{$data['credit']}}</td>
                    <th>หมายเหตุ</th>
                    <td>{{$data['remark']}}</td>
                    <th>ไฟล์</th>
                    <td><a href="{{asset($data['po_file'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a></td>
                </tr>
                <tr>
                    <th>โรงงาน</th>
                    <td>{{$data['provider_id']}}</td>
                    <th>เลขบัญชีผู้รับเงิน</th>
                    <td>...
                    </td>
                    <th>สถานะการจ่ายเงิน</th>
                    <td>...</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="container card-plane pb-5 my-5">
    @if(session("successfile"))
    <div class="row">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('successfile')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row mb-5">
        <div class="col-6">
            <p class="h3">ไฟล์</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-green" data-toggle="modal" data-target="#addFilePo">เพิ่มไฟล์</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>ลำดับ</td>
                        <td>ประเภทไฟล์</td>
                        <td>วันที่อัพโหลด</td>
                        <td>ไฟล์</td>
                        <td>หมายเหตุ</td>
                        <td>ดำเนินการ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchaseOrderFileDocs as $row)
                    <tr>
                        <td>
                            {{$row['no']}}
                        </td>
                        <td>
                            {{$row['file_type']}}
                        </td>
                        <td>
                            {{$row['created_at']}}
                        </td>
                        <td>
                            <a href="{{asset($row['file_upload'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a>
                        </td>
                        <td>
                            {{$row['remark']}}
                        </td>
                        <td>
                            <a href="po/file/edit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container card-plane pb-5 my-5">
    @if(session("successlist"))
    <div class="row">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('successlist')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-6">
            <p class="h3">รายการอุปกรณ์ PO</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-green" data-toggle="modal" data-target="#exampleModalCenter">เพิ่มอุปกรณ์</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>ลำดับ</td>
                        <td>ชื่ออุปกรณ์</td>
                        <td>จำนวน</td>
                        <td>ราคาต่อหน่วย</td>
                        <td>หมายเหตุ</td>
                        <td>ดำเนินการ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchaseOrderListDocs as $row)
                    <tr>
                        <td>
                            {{$row['no']}}
                        </td>
                        <td>
                            {{$row['device_name']}}
                        </td>
                        <td>
                            {{number_format($row['amount'],0)}}
                        </td>
                        <td>
                            {{number_format($row['priceperunit'],2)}}
                        </td>
                        <td>
                            {{$row['remark']}}
                        </td>
                        <td>
                            <a href="po/list/edit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Modal add file -->
<div class="modal fade" id="addFilePo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มไฟล์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="po/file/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="white-text">
                                <tr>
                                    <td>ประเภทไฟล์ <span class="text-danger">*</span></td>
                                    <td>
                                        <select name="fileType" id="" class="form form-control">
                                            <option value="เอกสารรับสินค้า">เอกสารรับสินค้า</option>
                                            <option value="ใบกำกับภาษี">ใบกำกับภาษี</option>
                                            <option value="เอกสารตรวจรับ (DAT)">เอกสารตรวจรับ (DAT)</option>
                                            <option value="อื่นๆ">อื่นๆ</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ไฟล์</td>
                                    <td><input type="file" name="fileUpload" required class="form-control" id=""></td>
                                </tr>
                            </table>
                            <div class="text-center my-3">
                                <input type="hidden" name="poId" value="{{$data['id']}}" id="">
                                <button type="submit" class="btn btn-green">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- Modal add PO -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มอุปกรณ์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="po/list/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="white-text">
                                <tr>
                                    <td width="40%">ชื่ออุปกรณ์ <span class="text-danger">*</span></td>
                                    <td><input type="text" name="deviceName" class="form-control" id="disburseValue"></td>
                                </tr>
                                <tr>
                                    <td>จำนวน <span class="text-danger">*</span></td>
                                    <td><input type="number" name="amount" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>ราคาต่อหน่วย <span class="text-danger">*</span></td>
                                    <td><input type="number" name="pricePerUnit" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                            </table>
                            <div class="text-center my-3">
                                <input type="hidden" name="poId" value="{{$data['id']}}" id="">
                                <button type="submit" class="btn btn-green">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script src="{{asset('js/app.js')}}"></script>
@stop