@extends('layout')
@section('content')
<div class="container card-plane pb-3">
    <div class="row">
        <div class="col">
            <p class="h3">แก้ไขผู้รับเงิน : {{$provider->provider_name}}</p>
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
    <div class="row asset-stats my-3">
        <div class="col">
            <form action="provider/update/{{$provider->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ชื่อผู้รับเงิน <span class="text-red">*</span></td>
                        <td><input type="text" name="providerName" class="form-control" id="" value="{{$provider->provider_name}}"></td>
                    </tr>
                    <tr>
                        <td>ชื่อย่อ</td>
                        <td><input type="text" name="providerShortname" class="form-control" value="{{$provider->provider_shortname}}"></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-green">บันทึก</button>
                    <a href="provider" class="btn btn-red">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>


</div>

<script src="{{asset('js/app.js')}}"></script>
@stop