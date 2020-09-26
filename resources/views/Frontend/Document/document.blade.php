@extends('layouts.default')

@foreach ($seopage as $object)
@section('title')
{{ $object->metatitle }}
@endsection
@section('description')
{{$object->metadescription}}
@endsection
@section('keyword')
{{$object->metakeyword}}
@endsection
@endforeach

@section('content')
<div style="padding:100px 0px 100px">
    <div style="padding:0px 0px 40px">
        <img class="img-fluid" src="{{asset('img/banner/banner-page.png')}}" style="max-height: 400px;width:100%" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-page-4">
                <h3 class="font-prompt"><i class="fas fa-donate ore"></i> การเตรียมเอกสาร</h3>
                <hr class="w-100 border-main" /><br />
                <h4 class="font-prompt mb-2 text-danger"><u><b>การเตรียมเอกสารมีอะไรบ้าง</u></b></h4>
                <p style="font-size: 18px;"><img src="#" alt="" style="width: 40px; padding-right: 10px;">
                    สำเนาบัตรประชาชน
                </p>
                <p style="font-size: 18px;"><img src="#" alt="" style="width: 40px; padding-right: 10px;">
                    สำเนาทะเบียนบ้าน
                </p>
                <p style="font-size: 18px;"><img src="#" alt="" style="width: 40px; padding-right: 10px;">
                    ใบประกอบการกิจการ
                </p>
                <p style="font-size: 18px;"><img src="#" alt="" style="width: 40px; padding-right: 10px;">
                    เอกสารสัญญาเช่า (ถ้ามี)
                </p>
                <p style="font-size: 18px;"><img src="#" alt="" style="width: 40px; padding-right: 10px;">
                    สเตทเม้นท์ย้อนหลัง 3 เดือน
                </p>

            </div>
        </div>
    </div>
</div>
@stop