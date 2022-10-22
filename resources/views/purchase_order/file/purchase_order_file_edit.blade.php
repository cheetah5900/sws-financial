@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขข้อมูลไฟล์ PO</p>
        </div>
    </div>
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="po/file/update/{{$data['id']}}" method="post">
                @csrf
                <table class="table table-striped table-bordered">
                    <tr>
                    <tr>
                        <td>ไฟล์</td>
                        <td><a href="{{asset($data['file_upload'])}}" target="_blank" class="btn btn-info">ดูไฟล์</a></td>
                    </tr>
                    <td>ประเภทไฟล์</td>
                    <td>
                        <select name="fileType" id="" class="form form-control">
                            <option <?php if ($data['file_type'] == 'เอกสารรับสินค้า') {
                                        echo "selected";
                                    } ?> value="เอกสารรับสินค้า">เอกสารรับสินค้า</option>
                            <option <?php if ($data['file_type'] == 'ใบกำกับภาษี') {
                                        echo "selected";
                                    } ?> value="ใบกำกับภาษี">ใบกำกับภาษี</option>
                            <option <?php if ($data['file_type'] == 'เอกสารตรวจรับ (DAT)') {
                                        echo "selected";
                                    } ?> value="เอกสารตรวจรับ (DAT)">เอกสารตรวจรับ (DAT)</option>
                            <option <?php if ($data['file_type'] == 'อื่นๆ') {
                                        echo "selected";
                                    } ?> value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </td>
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