@extends('layouts.default')
@section('content')
<div style="padding:100px 0px 100px">
    <div style="padding:0px 0px 40px">
        <img class="img-fluid" src="{{asset('img/banner/srimiracle_banner.png')}}" />
    </div>
    <div class="container">
        <div class="row _mb-60">
            <div class="col-12"></div>
            <div class="col-md-12 section-page-4" style="padding-bottom: 0;">
                <h3 class="font-prompt"><i class="fas fa-donate ore"></i> ติดต่อเรา</h3>
                <hr class="w-100 border-main">
                <div class=""></div><br>
            </div>
            <div class="col-12 col-md-12 col-lg-8" style="background-color: #e8e8e8;">
                <div class="row">
                    <div class="col-12">
                        <form class="my-4" action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="a28tj04vdr0kRbZo1PilSEcLewzP4bGFYFuky6NC" name="_token">
                            <div class="form-row align-items-center">
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="title">หัวเรื่อง *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="หัวเรื่อง *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="name"></label> -->
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="ชื่อผู้ติดต่อ *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="tel">เบอร์โทรศัพท์ *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="tel" name="tel"
                                            placeholder="เบอร์โทรศัพท์ *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="email">อีเมล *</label> -->
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="อีเมล *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="price">จำนวนเงินที่ต้องการกู้ *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="จำนวนเงินที่ต้องการกู้ *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="company">ธุรกิจของคุณ *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="company" name="company"
                                            placeholder="ธุรกิจของคุณ *" style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="detail">รายละเอียด *</label> -->
                                        </div>
                                        <textarea class="form-control" id="detail" name="detail" rows="3"
                                            style="border: unset;resize:none;" placeholder="รายละเอียด * "
                                            required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12 py-2 px-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile"
                                            name="file">
                                        <script>
                                        $('input[name="file"]').on('change', function() {
                                            var file = this.files[0];
                                            var fileType = file["type"];
                                            var validImageTypes = ["image/jpeg", "image/png"];
                                            if ($.inArray(fileType, validImageTypes) < 0) {
                                                alert('กรุณาอัพโหลดเฉพาะรูปภาพ jpeg หรือ png');
                                                $(this).val('');
                                            }
                                        })
                                        </script>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="col-12 py-2">
                                    <script src="https://www.google.com/recaptcha/api.js?hl=th"></script>
                                    <script>
                                    function makeaction() {
                                        document.getElementById('btn_submit').disabled = false;
                                    }
                                    </script>
                                    <div class="g-recaptcha" data-callback="makeaction"
                                        data-sitekey="6LfZivYUAAAAAFLGRwaZl86ZNR8yXy12my5fk_An">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfZivYUAAAAAFLGRwaZl86ZNR8yXy12my5fk_An&amp;co=aHR0cHM6Ly93d3cudGhhbmV0Y2FzaC5jb206NDQz&amp;hl=th&amp;v=AFBwIe6h0oOL7MOVu88LHld-&amp;size=normal&amp;cb=676dn0fo59vs"
                                                    width="304" height="78" role="presentation" name="a-5donm91lj2lo"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>

                                </div>
                                <div class="col-12 py-2 px-2">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-10">
                                            <button type="submit" id="btn_submit" name="btn_submit"
                                                class="btn bg-primary text-white"
                                                style="cursor: pointer;">ส่งข้อความ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 text-light bg-info">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <h3>ศรี-บริการสินเชื่อเงินทุนหมุนเวียน</h3>
                    </div>
                    <div class="col-12 mt-2">
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            สินเชื่อสำหรับผู้ประกอบการ
                        </p>
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            วงเงินอนุมัติสูงสุด 5,000,000 บาท
                        </p>
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            ดอกเบี้ยแบบลดต้นลดดอก
                        </p>
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            ไม่ต้องมีหลักทรัพย์ หรือบุคคลค้ำประกัน
                        </p>
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            เงินด่วน รับเงินทันที ภายใน 1 วัน
                        </p>
                        <p class="mb-2 text-white text-16px"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            เอกสารไม่ยุ่งยาก
                        </p>
                    </div>


                    <div class="col-12 mt-4">
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a href="tel:080 280 8185" class="text-white">
                                <img src="{{asset('img/icon/tel.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : 080 280 8185
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a href="mailto:srimiraclecash99@gmail.com" class="text-white">
                                <img src="{{asset('img/icon/email.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : srimiraclecash99@gmail.com
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a class="text-white" href="http://line.me/ti/p/~srimiraclecashservice" target="_blank">
                                <img src="{{asset('img/icon/line.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : srimiraclecashservice
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a href="https://www.facebook.com/srimiraclecash" target="_blank" class="text-white">
                                <img src="{{asset('img/icon/facebook.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : srimiraclecash
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop