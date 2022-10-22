@extends('layout')
@section('content')
<div class="container card-plane pb-5" btn-red>
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขยอด Advance : {{$advance->vendor->vendor_name}}</p>
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
            <form action="advance/update/{{$advance->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ยอด advance<span class="text-danger">*</span></td>
                        <td><input type="text" name="advanceValue" class="form-control" value="{{number_format($advance->advance_value,2)}}"></td>
                    </tr>
                    <tr>
                        <td>ผู้รับเงิน</td>
                        <td>
                            <select name="vendorId" class="form-control" id="liveSearch1">
                                @foreach ($vendor as $row)
                                <!-- ถ้าค่าในฐานตรงกับ select ตัวไหน ให้เพิ่ม attribute selected  -->
                                <option value="{{$row->id}}" <?php if ($advance->vendor_id == $row->id) {
                                                                    echo "selected";
                                                                } ?>>{{$row->vendor_sname}} - {{$row->vendor_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <td>วันที่โอน</td>
                    <td><input type="date" name="advanceDate" class="form-control" id="" value="{{$advance->advance_date}}"></td>
                    </tr>
                    </tr>
                    <td>หมายเหตุ</td>
                    <td><input type="text" name="remark" class="form-control" id="" value="{{$advance->remark}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="" class="btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    function advanceUse(id) {
        $('#advanceUseId').val(id) // กำหนดให้ตัวที่มี id เป็น #advanceUse มีค่าเท่ากับตัวที่รับมา (id)
    }

    $('#liveSearch1').select2({
        width: '100%'
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
@stop