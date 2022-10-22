<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่ม PO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="po/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="white-text">
                                <tr>
                                    <td width="40%">เลข PO <span class="text-danger">*</span></td>
                                    <td><input type="text" name="poNo" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>วันที่ PO</td>
                                    <td><input type="date" name="poDate" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>โรงงาน</td>
                                    <td>
                                        <select name="providerId" class="form-control">
                                            @foreach ($provider as $row)
                                            <option value="{{$row->id}}">{{$row->provider_shortname}} - {{$row->provider_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>เครดิต</td>
                                    <td><input type="text" name="credit" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ไฟล์ PO</td>
                                    <td>
                                        <input type="file" name="poFile" class="form-control" id="">
                                        <span class="text-danger">* ขนาดไฟล์ต้องไม่เกิน 1 MB</span>
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