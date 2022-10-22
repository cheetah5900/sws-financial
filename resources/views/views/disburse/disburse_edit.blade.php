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
            <form action="disburse/update/{{$disburseData['id']}}" method="post">
                @csrf
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>ชื่อเบิกจ่าย</td>
                        <td><input type="text" name="disburseName" class="form-control" value="{{$disburseData['disburse_name']}}" id=""></td>
                    </tr>
                    <tr>
                        <td>ยอดเบิก</td>
                        <td><input type="text" name="disburseValue" class="form-control" value="{{number_format($disburseData['disburse_value'],2)}}" id="disburseValue"></td>
                    </tr>
                    <tr>
                        <td>ผู้รับเงิน</td>
                        <td>
                            <select name="vendorId" class="form-control" id="liveSearch1">
                                @foreach ($vendor as $row)
                                <option <?php if ($row->id == $disburseData['vendor_id']) {
                                            echo "selected";
                                        } ?> value="{{$row->id}}">{{$row->vendor_sname}} - {{$row->vendor_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>วันที่ขอเบิก</td>
                        <td><input type="date" name="disburseDate" class="form-control" value="{{$disburseData['disburse_date']}}" id=""></td>
                    </tr>
                    <tr>
                        <td>วันที่รับเงิน<br> (ใส่เป็น วัน/เดือน/ปี)</td>
                        <td><input type="text" name="receivedDate" class="form-control" value="{{$disburseData['received_date']}}" id="" placeholder="ตัวอย่าง 31/01/2021,28/02/2022"></td>
                    </tr>
                    <tr>
                        <td>วันที่สะดวกโอน</td>
                        <td><input type="date" name="paymentReadyDate" class="form-control" value="{{$disburseData['payment_ready_date']}}" id=""></td>
                    </tr>
                    <tr>
                        <td>สถานะ GR</td>
                        <td>
                            <select name="grStatus" class="form-control" value="{{$disburseData['gr_status']}}" id="">
                                <option <?php if ($disburseData['gr_status'] == 'ไม่มี GR') {
                                            echo "selected";
                                        } ?> value="ไม่มี GR">ไม่มี GR</option>
                                <option <?php if ($disburseData['gr_status'] == 'รอทำ GR') {
                                            echo "selected";
                                        } ?> value="รอทำ GR">รอทำ GR</option>
                                <option <?php if ($disburseData['gr_status'] == 'รอรับเงิน') {
                                            echo "selected";
                                        } ?> value="รอรับเงิน">รอรับเงิน</option>
                                <option <?php if ($disburseData['gr_status'] == 'GR จบแล้ว') {
                                            echo "selected";
                                        } ?> value="GR จบแล้ว">GR จบแล้ว</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>สถานะโอน</td>
                        <td>
                            <select name="paymentStatus" class="form-control" value="{{$disburseData['payment_status']}}" id="">
                                <option <?php if ($disburseData['payment_status'] == 'ยังไม่โอน') {
                                            echo "selected";
                                        } ?> value="ยังไม่โอน">ยังไม่โอน</option>
                                <option <?php if ($disburseData['payment_status'] == 'โอนแล้ว') {
                                            echo "selected";
                                        } ?> value="โอนแล้ว">โอนแล้ว</option>
                                <option <?php if ($disburseData['payment_status'] == 'พักไว้ก่อน') {
                                            echo "selected";
                                        } ?> value="พักไว้ก่อน">พักไว้ก่อน</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="remark" class="form-control" value="{{$disburseData['remark']}}" id=""></td>
                    </tr>
                    <tr>
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