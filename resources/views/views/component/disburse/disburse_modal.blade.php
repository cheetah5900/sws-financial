<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มเบิกจ่าย</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="disburse/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped table-bordered" style="width:100%">
                                <tr>
                                    <td>ชื่อเบิกจ่าย <span class="text-danger">*</span></td>
                                    <td><input type="text" name="disburseName" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ยอดเบิก <span class="text-danger">*</span></td>
                                    <td><input type="text" name="disburseValue" class="form-control" id="disburseValue"></td>
                                </tr>
                                <tr>
                                    <td>ผู้รับเงิน</td>
                                    <td>
                                        <select name="vendorId" class="form-control" id="liveSearch1">
                                            @foreach ($vendor as $row)
                                            <option value="{{$row->id}}">{{$row->vendor_sname}} - {{$row->vendor_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>วันที่ขอเบิก <span class="text-danger">*</span></td>
                                    <td><input type="date" name="disburseDate" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>วันที่สะดวกโอน</td>
                                    <td><input type="date" name="paymentReadyDate" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>สถานะ GR</td>
                                    <td>
                                        <select name="grStatus" class="form-control" id="">
                                            <option value="ไม่มี GR">ไม่มี GR</option>
                                            <option value="รอทำ GR">รอทำ GR</option>
                                            <option value="รอรับเงิน">รอรับเงิน</option>
                                            <option value="GR จบแล้ว">GR จบแล้ว</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>สถานะโอน</td>
                                    <td>
                                        <select name="paymentStatus" class="form-control" id="">
                                            <option value="ยังไม่โอน">ยังไม่โอน</option>
                                            <option value="โอนแล้ว">โอนแล้ว</option>
                                            <option value="พักไว้ก่อน">พักไว้ก่อน</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>ไฟล์เบิก ผรม <span class="text-danger">*</span></td>
                                    <td>
                                        <input type="file" name="fileVendor" class="form-control" id="">
                                        <span class="text-danger">* ขนาดไฟล์ต้องไม่เกิน 1 MB</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ไฟล์เบิก ศรีสมวงศ์
                                        <span class="text-danger">*</span>
                                    </td>
                                    <td>
                                        <input type="file" name="fileSws" class="form-control" id="">
                                        <span class="text-danger">* ขนาดไฟล์ต้องไม่เกิน 1 MB</span>
                                    </td>
                                </tr>
                            </table>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">บันทึก</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>