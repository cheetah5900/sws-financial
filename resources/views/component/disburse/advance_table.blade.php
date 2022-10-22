<div class="row my-2">
    <div class="col">
        <p class="h3">ยอด Advance</p>
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
<div class="row mb-5">
    <div class="col text-right">
        <button class="btn btn-green" data-toggle="modal" data-target="#advanceModal">เพิ่มยอด Advance</button>
        <a class="btn btn-yellow" href="advance/advanceall">ดูยอดทั้งหมด</a>
    </div>
</div>
<div class="row asset-stats">
    <div class="col text-right mt-3">
        <table id="example2" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <td>ผู้รับเงิน</td>
                    <td>ยอด advance</td>
                    <td>ยอดใช้ไป</td>
                    <td>ยอดคงเหลือ</td>
                    <td>วันที่โอน</td>
                    <td>หมายเหตุ</td>
                    <td>ไฟล์โอน</td>
                    <td>ดำเนินการ</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultAdvance as $row)
                <tr>
                    <td>{{$row['vendor']}}</td>
                    <td>{{number_format($row['advance_value'],2)}}</td>
                    <td>{{number_format($row['advance_used'],2)}}</td>
                    <td>{{number_format($row['advance_remain'],2)}}</td>
                    <td>{{$row['advance_date']}}</td>
                    <td>{{$row['remark']}}</td>
                    <td><a href="{{asset($row['file_advance'])}}" target="_blank" class="btn btn-blue">ดูไฟล์</a></td>
                    <td>

                        @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                        <a href="advance/avuse/{{$row['id']}}" class="btn btn-outline-primary">ใช้ยอด</a>
                        @endif
                        <a href="advance/avdetail/{{$row['id']}}" class="btn btn-blue"><i class="bi bi-info-circle"></i></a>
                        @if(Auth::user()->id === 1 || Auth::user()->id === 2)
                        <a href="advance/avedit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                        @endif
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>