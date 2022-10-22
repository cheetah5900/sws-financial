<div class="row my-2">
    <div class="col">
        <p class="h3">ยอดรายรับแต่ละรอบ</p>
    </div>
</div>
<div class="row">
    <div class="col text-right">
        <button class="btn btn-primary" data-toggle="modal" data-target="#incomeModal">เพิ่มยอด รายรับ</button>
    </div>
</div>
<div class="row mt-2">
    <div class="col text-right mt-3">
        <table id="example2" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <td>ยอดเงิน</td>
                    <td>ยอดใช้ไป</td>
                    <td>ยอดคงเหลือ</td>
                    <td>วันที่ได้รับยอด</td>
                    <td>หมายเหตุ</td>
                    <td>ไฟล์โอน</td>
                    <td>ดำเนินการ</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultIncome as $row)
                <tr>
                    <td>{{number_format($row['advance_value'],2)}}</td>
                    <td>{{number_format($row['advance_used'],2)}}</td>
                    <td>{{number_format($row['advance_remain'],2)}}</td>
                    <td>{{$row['advance_date']}}</td>
                    <td>{{$row['remark']}}</td>
                    <td><a href="{{asset($row['file_advance'])}}" target="_blank" class="btn btn-info">ดูไฟล์</a></td>
                    <td>

                        @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                        <a href="advance/icuse/{{$row['id']}}" class="btn btn-outline-primary">ใช้ยอด</a>
                        @endif
                        <a href="advance/icdetail/{{$row['id']}}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                        @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                        <a href="advance/icedit/{{$row['id']}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        @endif
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>