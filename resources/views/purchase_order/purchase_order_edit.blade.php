@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขรายละเอียด PO {{$data['id']}}</p>
        </div>
    </div>
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="po/update/{{$data['id']}}" method="post">
                @csrf
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>เลข PO</td>
                        <td><input type="text" name="poNo" class="form-control" value="{{$data['po_no']}}" id=""></td>
                    </tr>
                    <tr>
                        <td>วันที่ PO</td>
                        <td><input type="date" name="poDate" class="form-control" value="{{$data['po_date']}}"></td>
                    </tr>
                    <tr>
                        <td>โรงงาน</td>
                        <td>
                            <select name="providerId" class="form-control">
                                @foreach ($provider as $row)
                                <option <?php if ($data['provider_id'] == $row->id) {
                                            echo "selected";
                                        } ?> value="{{$row->id}}">{{$row->provider_shortname}} - {{$row->provider_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>เครดิต</td>
                        <td><input type="text" name="credit" class="form-control" value="{{$data['credit']}}" id=""></td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" value="{{$data['remark']}}" id=""></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="" class=" btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#liveSearch1').select2({
        width: '100%'
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
@stop