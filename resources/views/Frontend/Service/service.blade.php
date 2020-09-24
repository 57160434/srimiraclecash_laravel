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
                <h3 class="font-prompt"><i class="fas fa-donate ore"></i> บริการ</h3>
                <hr class="w-100 border-main"><br />
                <h4 class="font-prompt mb-2 text-danger"><b><u>บริการของเรามีอะไรบ้าง</u></b></h4>
               <p style="font-size: 18px;">
                        <li>บริการสินเชื่อเพิ่อธุกิจ เงินทุนเพื่อธุรกิจ เงินด่วนสำหรับผู้ประกอบการ
                    ที่ต้องการเสริมสภาพคล่องทางการเงินขยายกิจการหรือใช้ในการหมุนเวียนภายในองค์กร
                    </li></p>

                <h4 class="font-prompt mb-2 text-danger"><b><u>คุณสมบัติผู้กู้</u></b></h4>
                <p style="font-size: 18px;">
                <li>มีกิจการเป็นของตนเอง</li>
                </p>
                <p style="font-size: 18px;">
                <li>มีใบจดทะเบียนประกอบการหรือหนังสือรับรองบริษัทเป็นชื่อของตนเอง</li>
                </p>
                <p style="font-size: 18px;">
                <li>มีแหล่งที่อยู่ที่สามารถติดต่อได้ทั้งที่บ้านและที่ทำงาน</li>
                </p>

                <h4 class="font-prompt mb-2 text-danger"><b><u>ข้อดีของเรา</u></b></h4>
                <p style="font-size: 18px;">
                <li>อนุมัติไว ภายใน 1 ชั่วโมง</li>
                </p>
                <p style="font-size: 18px;">
                <li>ไม่เช็คเครดิต ติดแบล็คลิสไม่ใช่ปัญหา</li>
                </p>
                <p style="font-size: 18px;">
                <li>สะดวก ง่าย ไม่ยุ่งยาก</li>
                </p>
                <p style="font-size: 18px;">
                <li>วงเงินอนุมัติสูงสุด 5,000,000 บาท</li>
                </p>

                <h4 class="font-prompt mb-2 text-danger"><b><u>เอกสารเบื้องต้นในการขอกู้เงิน</u></b></h4>
                <p style="font-size: 18px;">
                <li>สำเนาบัตรประชาชน</li>
                </p>
                <p style="font-size: 18px;">
                <li>สำเนาทะเบียนบ้าน</li>
                </p>
                <p style="font-size: 18px;">
                <li>ใบประกอบการกิจการ</li>
                </p>
                <p style="font-size: 18px;">
                <li>เอกสารสัญญาเช่า (ถ้ามี)</li>
                </p>
                <p style="font-size: 18px;">
                <li>สเตทเม้นท์ย้อนหลัง 3 เดือน</li>
                </p>

            </div>
        </div>
    </div>
</div>
@stop