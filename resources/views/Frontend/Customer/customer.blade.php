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
        <img class="img-fluid" src="{{asset('img/banner/srimiracle_banner.png')}}" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-page-4">
                <h3 class="font-prompt"><i class="fas fa-donate ore"></i> กลุ่มลูกค้าของเรา</h3>
                <hr class="w-100 border-main"><br/>
                <h4 class="font-prompt text-danger"><b><u>1. บริษัทจำกัด</u></b></h4>
                <p style="font-size: 18px;"><li>สินเชื่อเพื่อธุรกิจของท่าน นำไปขยายกิจการ เสริมสภาพคล่อง
                    เป็นเงินหมุนเวียนในองค์กร เพื่อเพิ่มหรือปรับเปลี่ยนอุปกรณ์สำนักงาน ขยายพื้นที่ใช้สอย</li></p>
                <h4 class="font-prompt text-danger"><b><u>2. โรงงานผลิต</u></b></h4>
                <p style="font-size: 18px;"><li>สินเชื่อเพื่อธุรกิจของท่าน นำไปขยายกิจการ เสริมสภาพคล่อง
                    เป็นเงินหมุนเวียนในองค์กร เพื่อเพิ่มการผลิต ซ่อมบำรุง สต็อกวัตถุดิบ</li></p>
                <h4 class="font-prompt text-danger"><b><u>3. ห้างหุ้นส่วนจำกัด</u></b></h4>
                <p style="font-size: 18px;"><li>สินเชื่อเพื่อธุรกิจของท่าน นำไปขยายกิจการ เสริมสภาพคล่อง
                    เป็นเงินหมุนเวียนในองค์กร เพื่อสต็อกสินค้าเพิ่ม ขยายสาขา ลงทุนในสินค้าตัวใหม่</li></p>

            </div>
        </div>
    </div>
</div>
@stop