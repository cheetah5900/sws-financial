@extends('layout')
@section('content')
<div class="container" style="max-width:90%;">
    @if(Auth::user()->id === 1 || Auth::user()->id === 2)
    <div class="row">
        <div class="col">
            <p class="h5 mb-3">บอทตัวที่ 1 Jisoo</p>
            <a href="linenotify/real/jisoo" class="btn btn-danger">กลุ่มจริง</a>
            <a href="linenotify/test/jisoo" class="btn btn-warning">กลุ่มทดสอบ</a>
            <hr class="mt-5">
        </div>
        <div class="col">
            <p class="h5 mb-3">บอทตัวที่ 2 Jennie</p>
            <a href="linenotify/real/jennie" class="btn btn-danger">กลุ่มจริง</a>
            <a href="linenotify/test/jennie" class="btn btn-warning">กลุ่มทดสอบ</a>
            <hr class="mt-5">
        </div>
        <div class="col">
            <p class="h5 mb-3">บอทตัวที่ 3 Rose</p>
            <a href="linenotify/real/rose" class="btn btn-danger">กลุ่มจริง</a>
            <a href="linenotify/test/rose" class="btn btn-warning">กลุ่มทดสอบ</a>
            <hr class="mt-5">
        </div>
        <div class="col">
            <p class="h5 mb-3">บอทตัวที่ 4 Lisa</p>
            <a href="linenotify/real/lisa" class="btn btn-danger">กลุ่มจริง</a>
            <a href="linenotify/test/lisa" class="btn btn-warning">กลุ่มทดสอบ</a>
            <hr class="mt-5">
        </div>
    </div>
    @endif
    <!-- ตัวแปร success ย้อนกลับของ การเพิ่มการเบิกจ่าย -->
    @if(session("success"))
    <div class="row mt-5">
        <div class="col">
            <div class="form-control-wrap">
                <div class="alert alert-success">
                    <strong>{{session('success')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

</div>
</div>

@stop