@extends('layouts.default')
@section('content')

<i class="fa fa-eye"></i>
<div id="carouselBannerFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/slider/slide1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider/slide2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
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
<div class="container-fluid body">

    <div class="row">
        <div class="col-12 section-page-1 bg-aboutus">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h3>เกี่ยวกับเรา</h3>
                    <p class="p-text">
                        เรายินดีให้บริการสินเชื่อเงินทุนสำหรับเจ้าของธุรกิจที่ต้องการเงินไปลงทุนต่อยอดในธุรกิจของท่าน
                        <br class="d-none d-md-none d-lg-block">เพื่อเสริมสภาพคล่องให้ธุรกิจของท่านดำเนินไปอย่างราบรื่น
                        เรายินดีบริการและให้คำปรึกษา
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="padding: 50px 15px 40px 15px">
        <div class="row">
            <div class="col-md-4 col-sm-6 widget-wrap">
                <h2>ทำไมต้อง พร้อมแคช?</h2>
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

    <!-- start reason page -->
    <div class="text-center">
        <div class="col-12 ">
            <h2>เหตุผลดีๆ กับพร้อมแคช</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="reason-item">
                    <img class="rounded-circle" src="{{asset('img/icon/service_3.jpg')}}" alt="serviceCash" />
                    <h3>ไม่เช็คภาระหนี้</h3>
                    <p>ติดแบล็คลิส ติดเครดิตบูโร ก็สามารถ ยื่นกู้ได้</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="reason-item">
                    <img class="rounded-circle" src="{{asset('img/icon/service_4.jpg')}}" alt="serviceCash" />
                    <h3>ไม่เก็บค่าบริการ</h3>
                    <p>ระหว่างยื่นสินเชื่อ ไม่เก็บค่าบริการ ก่อนล่วงหน้า</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="reason-item">
                    <img class="rounded-circle" src="{{asset('img/icon/service_1.jpg')}}" alt="serviceCash" />
                    <h3>ให้วงเงินสูง</h3>
                    <p>เริ่ม 10,000 ถึง 5,000,000 ล้านบาท ขึ้นไป</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="reason-item">
                    <img class="rounded-circle" src="{{asset('img/icon/service_2.jpg')}}" alt="serviceCash" />
                    <h3>อัตราดอกเบี้ย</h3>
                    <p>รับอัตราดอกเบี้ยต่ำสุดที่ 1%</p>
                </div>
            </div>
        </div>
    </div> <!-- end reason page -->

    <div style="padding: 70px 15px 60px 15px ">
        <div class="row">
            <div class="col-12 text-center">
                <h3>ขอสินเชื่อง่ายๆ 3 ขั้นตอน</h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-md-4 ">
                <!-- <h3 class="red">1</h3> -->
                <h4>ติดต่อเจ้าหน้าที่</h4>
                <p>ติดต่อขอสินเชื่อกับเจ้าหน้าที่ ทางโทรศัพท์เป็นหลัก โดยบอกลักษณะธุรกิจที่คุณทำอยู่
                    และวงเงินที่ต้องการขอสินเชื่อ</p>
            </div>
            <div class="col-12 col-md-4">
                <h4>ติดต่อเจ้าหน้าที่</h4>
                <p>รูปถ่ายกิจการธุรกิจ ใบจดทะเบียนการค้า สำเนาบัตรประชาชน สำเนาสัญญาสถานที่ (กรณีเช่า) สำเนาทะเบียนบ้าน
                    (ถ้ามี) สเตทเม้นท์ย้อนหลัง 3 เดือน</p>
            </div>
            <div class="col-12 col-md-4">
                <h4>ติดต่อเจ้าหน้าที่</h4>
                <p>หลักจากเก็บเอกสารจนครบ รออนุมัติภายใน 1-2 ชั่วโมง จะแจ้งผลให้ทราบทันที
                    และรับเงินโอนเข้าบัญชีธนาคารของท่านทันที</p>
            </div>
        </div>
    </div>
    <div style="padding : 0px 15px 60px 15px;" class="">
        <div class="row bg-danger">
            <div class="col-md-4 col-sm-12 text-center text-white">
                <div style="padding:20px"></div>
                <h3>กลุ่มลูกค้าธุรกิจของเรา​</h3>
                <div style="padding:20px">
                    <p>พร้อมแคช พร้อมให้บริการ ตามลักษณะธุรกิจของคุณ</p>
                </div>
            </div>
            <div class=" col-md-8 col-sm-12 bg-white" style="padding : 0px 1px 0px 0px;">
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
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/slider/slide2.jpg')}}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption ">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/slider/slide3.jpg')}}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption ">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start knowleadge-->
    <div style="padding:60px 15px">
        <div class="col-12 text-center pb-0 pb-md-4 font-prompt">
            <h3>สาระการเงิน</h3>
        </div>
        <div class="card-deck">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-lg-3">
                    <div class="card">
                        <div style="padding: 14px">
                            <img class="card-img-top rounded" src="{{asset('img/blog/blog1.png')}}"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-3">
                    <div class="card">
                        <div style="padding: 14px">
                            <img class="card-img-top rounded" src="{{asset('img/blog/blog1.png')}}"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-3">
                    <div class="card">
                        <div style="padding: 14px">
                            <img class="card-img-top rounded" src="{{asset('img/blog/blog1.png')}}"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-3">
                    <div class="card">
                        <div style="padding: 14px">
                            <img class="card-img-top rounded" src="{{asset('img/blog/blog1.png')}}"
                                alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center mt-0 mt-md-4 pt-0 pt-md-4">
            <a href="#" class="btn bg-primary" style="color: #fff;">ดูสาระการเงินทั้งหมด</a>
        </div>
    </div><!-- end knowledge-->

    <div style="padding:30px 0px">
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
                                <a href="#" class="btn bg-white px-4" style="color: #000;">ปรึกษาเรา <i
                                        class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end contaniner-->
@stop