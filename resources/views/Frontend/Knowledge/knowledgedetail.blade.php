@extends('layouts.default')
@section('content')
<div style="padding:100px 0px 40px">
    <img class="img-fluid" src="{{asset('img/banner/srimiracle_banner.png')}}" />
</div>
<div style="padding:0px 0px 80px 0px">
    <div class="container-fluid">
        <div class="col-md-12 section-page-4" style="padding-bottom: 0;">
            <h3 class="font-prompt"><i class="fas fa-donate ore"></i> สาระการเงิน</h3>
            <hr class="w-100 border-main"><br />
        </div>
    </div>
    <div class="container-fluid">
        <h4>{{$knowledge->knowledge_heading}}</h4>
        <label><i class="far fa-calendar-alt"></i> {{$knowledge->knowledge_created_at}}</label>
        <div>
        <strong>{{$knowledge->knowledge_description}}</strong>
        </div>
        <div>{{$knowledge->knowledge_detail}}</div>
    </div>
</div>
@stop