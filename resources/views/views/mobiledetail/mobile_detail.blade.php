<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SWS | Financial</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Bootstrap 4 Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Select2 Live Search -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        body {
            font-family: 'Prompt', sans-serif;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <p class="h4">รายละเอียด : {{$disburseData->disburse_name}}</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th width="30%">ชื่อเบิกจ่าย</th>
                        <td>{{$disburseData->disburse_name}}</td>
                    </tr>
                    <tr>
                        <th>ยอดเบิก</th>
                        <td>{{number_format($disburseData->disburse_value,2)}} บาท</td>
                    </tr>
                    <tr>
                        <th>จ่ายไปแล้ว</th>
                        <td>{{number_format($sumValue,2)}} บาท</td>
                    </tr>
                    <tr>
                        <th>คงเหลือ</th>
                        <td>{{number_format($disburseData->disburse_value-$sumValue,2)}} บาท</td>
                    </tr>
                    <tr>
                        <th style="width:20%">ผู้ยื่นเบิก</th>
                        <td>{{$disburseData->user->name}}</td>
                    </tr>
                    <tr>
                        <th>วันที่ขอเบิก</th>
                        <td>{{$disburseData->disburse_date}}</td>
                    </tr>
                    <tr>
                        <th>ผู้รับเงิน</th>
                        <td>{{$disburseData->vendor->vendor_sname}} - {{$disburseData->vendor->vendor_name}}</td>
                    </tr>
                    <tr>
                        <th>สถานะ GR</th>
                        <td>{{$disburseData->gr_status}}</td>
                    </tr>
                    <tr>
                        <th>วันที่สะดวกโอน</th>
                        <td>{{$disburseData->payment_ready_date}}</td>
                    </tr>
                    <tr>
                        <th>หมายเหตุ</th>
                        <td>{{$disburseData->remark}}</td>
                    </tr>
                    <tr>
                        <th>สถานะโอน</th>
                        <td>{{$disburseData->payment_status}}</td>
                    </tr>
                    <tr>
                        <th>ไฟล์เบิกศรีสมวงศ์</th>
                        <td>
                            @if($disburseData->file_sws != '')
                            <a href="{{asset($disburseData->file_sws)}}" target="_blank" class="btn btn-info">ดูไฟล์</a>
                            @else
                            ไม่มีไฟล์
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>ไฟล์เบิกผู้รับเหมา</th>
                        <td>
                            <a href="{{asset($disburseData->file_vendor)}}" target="_blank" class="btn btn-info">ดูไฟล์</a>
                        </td>
                    </tr>
                    <tr>
                        <th>เลขบัญชีผู้รับเงิน</th>
                        <td>
                            {{$disburseData->vendor->vendor_account}} ({{$disburseData->vendor->vendor_bank}})
                            @if($disburseData->vendor->file_account != '')
                            <a href="{{asset($disburseData->vendor->file_account)}}" class="btn btn-info">ดูไฟล์</a>
                            @else
                            ไม่มีไฟล์
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col">
                <p class="h3">ประวัติการจ่ายเงิน</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <td>จำนวนที่จ่าย</td>
                            <td>ไฟล์ใบเสร็จ</td>
                            <td>หมายเหตุ</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payment as $row)
                        <tr>
                            <td>{{number_format($row->payment_value,2)}} บาท</td>
                            <td><a href="{{asset($row->file_payment)}}" class="btn btn-primary" target="_blank">ดูไฟล์</a></td>
                            <td>{{$row->remark}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>





    <script src="{{asset('js/app.js')}}"></script>
</body>


</html>