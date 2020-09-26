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
<div style="padding:100px 0px 0px">
    <div style="padding:0px 0px 40px">
        <img class="img-fluid" src="{{asset('img/banner/blog4.jpg')}}" style="max-height:width:100%;filter:brightness(50%)" />
    </div>
    <div class="container">
        <div class="row _mb-60">
            <div class="col-12"></div>
            <div class="col-md-12 section-page-4" style="padding-bottom: 0;">
                <h3 class="font-prompt"><i class="fas fa-donate ore"></i> ติดต่อเรา</h3>
                <hr class="w-100 border-main">
                <div class=""></div><br>
            </div>
            @if(count($errors) > 0)
            <?php  Alert::error('Something went wrong',$errors->all());?>
            @endif
            <div class="col-12 col-md-12 col-lg-8" style="background-color: #e8e8e8;">
                <div class="row">
                    <div class="col-12">
                        <form class="my-4" action="{{url('contact')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-row align-items-center">
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="title">หัวเรื่อง *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="customer_title"
                                            name="customer_title" placeholder="หัวเรื่อง *" style="border: unset;"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="name"></label> -->
                                        </div>
                                        <input type="text" class="form-control" id="customer_fullname"
                                            name="customer_fullname" placeholder="ชื่อผู้ติดต่อ *"
                                            style="border: unset;" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="tel">เบอร์โทรศัพท์ *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="customer_phonenumber"
                                            name="customer_phonenumber" placeholder="เบอร์โทรศัพท์ *"
                                            style="border: unset;" required="">
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
                                        <input type="number" class="form-control" id="baht" name="baht" maxlength="10"
                                            placeholder="จำนวนเงินที่ต้องการกู้ *" style="border: unset;" required=""
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="company">ธุรกิจของคุณ *</label> -->
                                        </div>
                                        <input type="text" class="form-control" id="customer_company"
                                            name="customer_company" placeholder="ธุรกิจของคุณ *" style="border: unset;"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-12 py-2 px-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <!-- <label class="input-group-text" style="cursor: pointer;" for="detail">รายละเอียด *</label> -->
                                        </div>
                                        <textarea class="form-control" id="customer_detail" name="customer_detail"
                                            rows="3" style="border: unset;resize:none;" placeholder="รายละเอียด * "
                                            required=""></textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-12 py-2 px-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="folder_path"
                                            name="folder_path">
                                        <label class="custom-file-label" for="validatedCustomFile">
                                            </label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div> -->
                                <div class="col-12 py-2 px-2">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-10">
                                            <button type="submit" id="btn_submit" name="btn_submit"
                                                class="btn bg-danger text-white"
                                                style="cursor: pointer;">ส่งข้อความ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 text-light bg-danger">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <h3>เอเชียแคลช-บริการสินเชื่อเงินทุนหมุนเวียน</h3>
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
                            <a href="tel:091 790 9847" class="text-white">
                                <img src="{{asset('img/icon/tel.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : 091 790 9847
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a href="mailto:Arthikub@gmail.com" class="text-white">
                                <img src="{{asset('img/icon/email.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : Arthikub@gmail.com
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a class="text-white" href="http://line.me/ti/p/~0917909847" target="_blank">
                                <img src="{{asset('img/icon/line.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : 0917909847
                            </a>
                        </p>
                        <p class="mb-2 text-white" style="font-size: 16px;">
                            <a href="https://www.facebook.com/AsiaCashs-106924107710256" target="_blank"
                                class="text-white">
                                <img src="{{asset('img/icon/facebook.png')}}" class="rounded-circle"
                                    style="width: 24px; border: 2px solid #fff;" alt=""> : Asia Cashs
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop