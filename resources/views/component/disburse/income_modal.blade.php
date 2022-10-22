<!-- incomeModal -->
<div class="modal fade" id="incomeModal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มยอดรายรับ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="advance/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class=" white-text" style="width:100%">
                                <tr>
                                    <td>ยอดเงิน<span class="text-danger">*</span></td>
                                    <td><input type="text" name="advanceValue" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>วันที่โอน<span class="text-danger">*</span></td>
                                    <td><input type="date" name="advanceDate" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>หมายเหตุ</td>
                                    <td><input type="text" name="remark" class="form-control" id=""></td>
                                </tr>
                            </table>
                            <div class="text-center my-3">
                                <input type="hidden" name="type" value="income">
                                <input type="hidden" name="vendorId" value="1">
                                <button type="submit" class="btn btn-green">บันทึก</button>
                                <button type=" button" class="btn btn-gray" data-dismiss="modal">ปิด</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>