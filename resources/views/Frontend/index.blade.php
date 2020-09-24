@extends('layouts.default')
@section('link')
<link href="{{ asset('css/knowledge.css') }}" rel="stylesheet">
@endsection

@foreach ($seopage as $object)
@section('title')
{{ $object->metatitle }}
@endsection
@section('description')
{{$object->metatitle}}
@endsection
@section('keyword')
{{$object->metatitle}}
@endsection
@endforeach

@section('content')
<div class="d-none d-sm-block" style="padding:20px;"></div>
<div class="d-sm-none d-block" style="padding:30px;"></div>
<div id="carouselBannerFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">-
        <div class="carousel-item active">
            <img src="{{ asset('img/banner/banner_marketing.jpg')}}" class="d-block w-100" alt="...">
            <div class="d-none d-sm-block">
                <div class="carousel-caption  d-md-block" style="margin-top:12%;">
                    <h1 data-animation="animated zoomInLeft" class="animated zoomInLeft" style="font-size:3rem;">
                    <b>บริการทุนสำรองเพื่อเสริมสภาพคล่องทางการเงินของท่าน</b></h1>
                    <h2 data-animation="animated fadeInRight" class="animated fadeInRight" style="font-size:2rem;">
                        <b>เอเชีย แคลช เงินด่วน</b></h2>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/banner_otp.jpg')}}" class="d-block w-100" alt="...">
            <div class="d-none d-sm-block">
                <div class="carousel-caption  d-md-block" style="margin-top:12%;">
                    <h1 data-animation="animated zoomInLeft" class="animated zoomInLeft" style="font-size:3rem;">
                    <b>การจัดหาเทคนิคการช่วยเหลือสนับสนุน</b></h1>
                    <h2 data-animation="animated fadeInRight" class="animated fadeInRight" style="font-size:2rem;">
                        <b>ด้วยพนักงานมืออาชีพ</u> เข้าใจในปัญหาของคุณ</b></h2>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/banner_tracking.jpg')}}"class="d-block w-100" alt="...">
            <div class="d-none d-sm-block">
                <div class="carousel-caption  d-md-block" style="margin-top:12%;">
                    <h1 data-animation="animated zoomInLeft" class="animated zoomInLeft" style="font-size:3rem;">
                    <b>บริการทุนสำรองฉุกเฉินเพื่อเสริมสภาพคล่อง</b></h1>
                    <h2 data-animation="animated fadeInRight" class="animated fadeInRight" style="font-size:2rem;">
                        <b>เอเชีย แคลช เงินด่วน 1
                        ชม.รู้ผล</b></h2>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselBannerFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselBannerFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- start contaniner-->
<!-- <div class="container-fluid body"> -->

<!--start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 section-page-1 bg-aboutus bg-danger text-light">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1>เกี่ยวกับเรา</h1>
                    <p class="p-text">
                        เรายินดีให้บริการสินเชื่อเงินทุนสำหรับเจ้าของธุรกิจที่ต้องการเงินไปลงทุนต่อยอดในธุรกิจของท่าน
                        <br class="d-none d-md-none d-lg-block">เพื่อเสริมสภาพคล่องให้ธุรกิจของท่านดำเนินไปอย่างราบรื่น
                        เรายินดีบริการและให้คำปรึกษา
                    </p>
                    <a href="{{url('/contact')}}" type="button"
                        class="btn btn-light text-secondary rounded-pill btn-lg"><b>สนใจติดต่อ ></b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-->

<div style="padding: 50px 0px 40px 0px" class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-6 text-center widget-wrap">
                <div style="padding:0px 0px 20px 0px">
                    <h1>เกี่ยวกับ เอเชียแคลช</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <p>สินเชื่อธุรกิจที่จดทะเบียนการค้า ทะเบียนพาณิชย์ นิติบุคคล SMEs เพื่อสนับสนุนผู้ประกอบการ ห้างหุ่นส่วน
                    บริษัท ห้างร้าน โรงงานอุตสาหกรรม วิสาหกิจขนาดกลางและขนาดย่อม (กิจการผลิตสินค้า, กิจการการให้บริการ,
                    กิจการค้าส่ง) ฯลฯ ด้วยอัตราดอกเบี้ยถูก พร้อมลดดอกเบี้ยเงินกู้ได้ ต้องการกู้เงิน ขยายกิจการ
                    เพิ่มสภาพคล่องให้ธุรกิจของคุณวงเงินสูง ดอกเบี้ยถูก ไม่ต้องค้ำประกัน อนุมัติเร็ว ผ่านง่ายกว่าธนาคาร
                    ท่านใดที่กำลังหาเงินทุนหมุนเวียนในธุรกิจเพื่อขยายกิจการ พร้อมแคช พร้อมช่วยเหลือคุณให้มีโอกาส
                    ได้ต่อยอดทางธุรกิจได้ด้วยตัวคุณเอง</p>
            </div>
        </div>
    </div>
</div>

<!-- start reason page -->
<div class="text-center bg-danger text-light">
    <div style="padding: 30px 0px">
        <div class="col-12 ">
            <h1 style="padding:0px 0px 20px 0px">เหตุผลที่ต้องเลือกบริการ เอเชียแคลช</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="reason-item">
                        <img class="rounded-circle" src="{{asset('img/icon/service_3.jpg')}}" alt="serviceCash" />
                        <h2>ไม่เช็คภาระหนี้</h2>
                        <p>ติดแบล็คลิส ติดเครดิตบูโร สามารถยื่นกู้ได้</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="reason-item">
                        <img class="rounded-circle" src="{{asset('img/icon/service_4.jpg')}}" alt="serviceCash" />
                        <h2>ไม่เก็บค่าบริการ</h2>
                        <p>ระหว่างยื่นสินเชื่อ ไม่มีการเก็บค่าบริการก่อนล่วงหน้า</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="reason-item">
                        <img class="rounded-circle" src="{{asset('img/icon/service_1.jpg')}}" alt="serviceCash" />
                        <h2>ให้วงเงินสูง</h2>
                        <p>เริ่ม 10,000 ถึง 5,000,000 ล้านบาท ขึ้นไป</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="reason-item">
                        <img class="rounded-circle" src="{{asset('img/icon/service_2.jpg')}}" alt="serviceCash" />
                        <h2>อัตราดอกเบี้ย</h2>
                        <p>รับอัตราดอกเบี้ยต่ำสุดที่ 1%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end reason page -->

<div style="padding: 60px 0px " class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="padding:0px 0px 20px 0px">ขอสินเชื่อง่ายๆ 3 ขั้นตอน</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-md-4 ">
                <!-- <h3 class="red">1</h3> -->
                <h2>ติดต่อเจ้าหน้าที่</h2>
                <p>ติดต่อขอสินเชื่อกับเจ้าหน้าที่ ทางโทรศัพท์เป็นหลัก โดยบอกลักษณะธุรกิจที่คุณทำอยู่
                    และวงเงินที่ต้องการขอสินเชื่อ</p>
            </div>
            <div class="col-12 col-md-4">
                <h2>ติดต่อเจ้าหน้าที่</h2>
                <p>รูปถ่ายกิจการธุรกิจ ใบจดทะเบียนการค้า สำเนาบัตรประชาชน สำเนาสัญญาสถานที่ (กรณีเช่า) สำเนาทะเบียนบ้าน
                    (ถ้ามี) สเตทเม้นท์ย้อนหลัง 3 เดือน</p>
            </div>
            <div class="col-12 col-md-4">
                <h2>ติดต่อเจ้าหน้าที่</h2>
                <p>หลักจากเก็บเอกสารจนครบ รออนุมัติภายใน 1-2 ชั่วโมง จะแจ้งผลให้ทราบทันที
                    และรับเงินโอนเข้าบัญชีธนาคารของท่านทันที</p>
            </div>
            <div class="col-12 text-center">
                <a href="{{url('/document')}}" type="button"
                    class="btn btn-info text-light rounded-pill btn-lg">อ่านรายละเอียดเพิ่มเติม</a>
            </div>
        </div>
    </div>
</div>
<div style="padding : 0px 0px 40px 0px;">
    <div class="container-fluid">
        <div class="row bg-danger">
            <div class="col-md-3 col-sm-12 text-center text-white widget-wrap">
                <h2><b>กลุ่มลูกค้าธุรกิจของเรา</b>​</h2>
                <div style="padding:20px">
                    <h3>ศริมิราเคิล พร้อมให้บริการ ตามลักษณะธุรกิจของคุณ</h3>
                </div>
            </div>
            <div class=" col-md-9 col-sm-12 bg-white" style="padding : 0px 1px 0px 0px;">
                <div id="carouselcustomer" class="carousel carousel-fixed slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselcustomer" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselcustomer" data-slide-to="1"></li>
                        <li data-target="#carouselcustomer" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner fixed-height">
                        <div class="carousel-item active ">
                            <img src="{{ asset('img/slider/slide1.jpg')}}" class="d-block w-100 " alt="..." />
                            <div class="carousel-caption ">
                                <h3>ธุรกิจค้าส่ง</h3>
                                <p>ไม่ว่าจะเป็นสินค้าสำหรับอุปโภคบริโภค ยา เสื้อผ้าวัตถุดิบที่ใช้ในการผลิต
                                    วัตถุดิบสำหรับโรงงานอุตสาหกรรม บรรจุภัณฑ์ ฯลฯ</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/slider/slide2.jpg')}}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption ">
                                <h3>ธุรกิจแปรรูป</h3>
                                <p>แปรรูปสินค้าต่างๆ เช่น เหล็กเส้น น้ำมันเชื้อเพลิง ถ่านหิน อาหาร เสื้อผ้า
                                    วัตถุดิบทางการเกษตร การประมง ฯลฯ</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/slider/slide3.jpg')}}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption ">
                                <h3>ธุรกิจขนส่ง</h3>
                                <p>การขนส่งสินค้าอุปโภคและบริโภค ผลิตผลทางการเกษตร สินค้าอุตสาหกรรม วัตถุอันตราย
                                    สินค้าเฉพาะ ฯลฯ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start knowleadge-->
<div style="padding:40px 15px" class="bg-light">
    <div class="col-12 text-center pb-0 pb-md-4 font-prompt">
        <h1>สาระการเงิน</h1>
    </div>
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <div class="row">
                    @foreach($knowledges as $i)
                    @if ($i->knowledge_status === 1)
                    <div class="col-sm-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span>
                                        <?php 
                                    $timestmap = $i->knowledge_created_at;
                                    $date = date("j",strtotime($timestmap));
                                    echo $date;
                                    ?>
                                    </span>
                                    <label>
                                        <?php
                                    $timestmaps = $i->knowledge_created_at;
                                    $moth =date("M",strtotime($timestmaps)); 
                                    echo $moth?></label>
                                </div>
                                <a href="{{url('knowledge',['knowledge'=> $i->id])}}">
                                    <img src="{{asset('img/blog/pexels-6187.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5 class="text-length"><a
                                        href="{{url('knowledge',['knowledge'=> $i->id])}}">{{$i->knowledge_heading}}</a>
                                </h5>
                                <p class="text-length">{{$i->knowledge_description}}</p>
                                <div class="btn-bar">
                                    <a href="{{url('knowledge',['knowledge'=> $i->id])}}" class="px-btn-arrow">
                                        <span>อ่านเพิ่มเติม</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-0 mt-md-4 pt-0 pt-md-4">
        <a href="{{url('knowledge')}}" class="btn btn-lg bg-info text-light">ดูสาระการเงินทั้งหมด</a>
    </div>
</div><!-- end knowledge-->

<div style="padding:40px 0px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 consult-us" style="z-index: 0;">
                <div style="padding:20px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="font-prompt text-3" style="line-height: 50px !important;">
                                    ธุรกิจเติบโตด้วยเงินทุนหมุนเวียนเพื่อธุรกิจ<br
                                        class="d-md-block d-none">เรายินดีให้คำปรึกษา
                                </p>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-4">
                                <a href="{{url('contact')}}" class="btn btn-lg bg-secondary px-4 text-light">ปรึกษาเรา
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- </div>  -->
<!-- end contaniner-->
@stop