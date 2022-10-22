@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row pb-3">
        <div class="col">
            <a href="" class=" btn btn-gray">ย้อนกลับ</a>
        </div>
    </div>
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
    <div class="row my-3">
        <div class="col-6">
            <p class="h3">รายการโรงงาน</p>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-blue" data-toggle="modal" data-target="#exampleModalCenter">เพิ่มโรงงาน</button>
        </div>
    </div>
    <div class="row asset-stats">
        <div class="col">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ชื่อเต็ม</th>
                        <th>ชื่อย่อ</th>
                        <th>ธนาคาร</th>
                        <th>เลขบัญชี</th>
                        <th>ไฟล์สมุดบัญชี</th>
                        <th>ดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->provider_name}}</td>
                        <td>{{$row->provider_shortname}}</td>
                        <td>{{$row->provider_bank}}</td>
                        <td>{{$row->provider_bank_number}}</td>
                        <td>
                            @if($row->provider_bank_file != '')
                            <a href="{{asset($row->provider_bank_file)}}" class="btn btn-green" target="_blank">ดูไฟล์</a>
                            @else
                            ไม่มีไฟล์
                            @endif
                        </td>
                        <td>
                            <a href="provider/edit/{{$row['id']}}" class="btn btn-yellow"><i class="bi bi-pencil-square"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มโรงงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="provider/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="white-text" style="width:100%">
                                <tr>
                                    <td>ชื่อเต็ม <span class="text-danger">*</span></td>
                                    <td><input type="text" name="providerName" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ชื่อย่อ</td>
                                    <td><input type="text" name="providerSname" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>ธนาคาร <span class="text-danger">*</span></td>
                                    <td>
                                        <select name="providerBank" class="form-control" id="liveSearch1">
                                            <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                            <option value="	ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                            <option value="	ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                            <option value="	ธนาคารทหารไทยธนชาต">ธนาคารทหารไทยธนชาต</option>
                                            <option value="	ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                                            <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                                            <option value="ธนาคารเกียรตินาคินภัทร">ธนาคารเกียรตินาคินภัทร</option>
                                            <option value="	ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                                            <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                                            <option value="	ธนาคารยูโอบี">ธนาคารยูโอบี</option>
                                            <option value="ธนาคารไทยเครดิตเพื่อรายย่อย">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                                            <option value="ธนาคารแลนด์ แอนด์ เฮ้าส์">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
                                            <option value="ธนาคารไอซีบีซี (ไทย)">ธนาคารไอซีบีซี (ไทย)</option>
                                            <option value="	ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย">ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย</option>
                                            <option value="	ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                            <option value="	ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย">ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                                            <option value="	ธนาคารออมสิน">ธนาคารออมสิน</option>
                                            <option value="	ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                                            <option value="	ธนาคารอิสลามแห่งประเทศไทย">ธนาคารอิสลามแห่งประเทศไทย</option>
                                            <option value="อื่นๆ (แจ้งแอดมินให้เพิ่ม)">อื่นๆ (แจ้งแอดมินให้เพิ่ม)</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>เลขบัญชี <span class="text-danger">*</span></td>
                                    <td><input type="text" name="providerBankNumber" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ไฟล์สมุดบัญชี</td>
                                    <td>
                                        <input type="file" name="providerBankFile" class="form-control" id="">
                                        <span class="text-danger">ขนาดไฟล์ต้องไม่เกิน 1 MB</span>
                                    </td>
                                </tr>
                            </table>
                            <div class="text-center my-3">
                                <button type="submit" class="btn btn-green">บันทึก</button>
                                <button type="button" class="btn btn-gray" data-dismiss="modal">ปิด</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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