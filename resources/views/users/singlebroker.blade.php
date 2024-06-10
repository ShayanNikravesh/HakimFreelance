@extends('users.layouts.master')

@section('content')

    <!--Main:start-->
<main class="container mt-xxxx-large">
    <!--    BreadCrumb:start-->
    <nav class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item fs-8"><a href="#">برگ شاپ</a></li>
            <li class="breadcrumb-item fs-8"><a href="#">کالای دیجیتال</a></li>
            <li class="breadcrumb-item fs-8"><a href="#">لپ تاپ</a></li>
        </ol>
    </nav>
    <!--BreadCrumb:end-->

    <!--Product Details:start-->
    <section class="product-details">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 position-relative">
                <!--Product Incredible Offer:start-->
                <div class="product-incredible-offer ms-5">
                    <img src="{{asset('userassets/img/IncredibleOffer.svg')}}" alt="">
                    <div class="timer-wrapper">
                    </div>
                </div>
                <!--Product Incredible Offer:end-->

                <!--Product Images:start-->
                <div class="product-images">
                    <img class="xzoom img-fluid" src="{{asset('userassets/img/single-product-1.jpg')}}"
                         xoriginal="{{asset('userassets/img/single-product-1.jpg')}}"/>

                    <div class="xzoom-thumbs mt-2">
                        <a href="{{asset('userassets/img/single-product-1.jpg')}}">
                            <img class="xzoom-gallery" src="{{asset('userassets/img/single-product-1.jpg')}}"
                                 xpreview="{{asset('userassets/img/single-product-1.jpg')}}">
                        </a>
                        <a href="{{asset('userassets/img/single-product-2.jpg')}}">
                            <img class="xzoom-gallery" src="{{asset('userassets/img/single-product-2.jpg')}}">
                        </a>
                        <a href="{{asset('userassets/img/single-product-3.jpg')}}">
                            <img class="xzoom-gallery" src="{{asset('userassets/img/single-product-3.jpg')}}">
                        </a>
                        <a href="{{asset('userassets/img/single-product-4.jpg')}}">
                            <img class="xzoom-gallery" src="{{asset('userassets/img/single-product-4.jpg')}}">
                        </a>
                    </div>
                </div>
                <!--Product Images:end-->

            </div>

            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <!--Product Details:start-->
                <div class="product-details">
                    <!--Product Title:start-->
                    <h1 class="fs-5 fw-bold">لپ تاپ 11 اینچی لنوو مدل IdeaPad 1 11ADA05</h1>
                    <span class="gray-400 en-title d-block pb-1 fs-7">Lenovo IdeaPad 1 11ADA05 11 inch Laptop</span>
                    <!--Product Title:end-->


                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                            <!--                            Product Details Right:start-->
                            <div class="product-details-right">
                                <div class="product-attr my-4">
                                    <p class="fs-5 fw-bold mb-2">ویژگی ها</p>
                                    <ul>
                                        <li class="fs-6">
                                            <span class="gray-600">سری پردازنده :</span>
                                            <span>INTEL</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">ظرفیت حافظه رم :</span>
                                            <span>16 گیگابایت</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">سازنده پردازنده گرافیکی :</span>
                                            <span>AMD</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600"> دقت صفحه نمایش :</span>
                                            <span>AMD</span>
                                        </li>
                                    </ul>
                                    <p class="mt-4 gray-600">کد محصول : <span>bsp1213424</span></p>
                                </div>
                            </div>
                            <!--                            Product Details Right:end-->
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        </div>
                    </div>
                </div>
                <!--Product Details:end-->
            </div>
        </div>
    </section>
    <!--Product Details:end-->


    <!--    Product Tabs:start-->
    <section class="product-tabs mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item fs-7"><a class="nav-link active custom-link" href="#productInfo" data-bs-toggle="tab">
                معرفی
            </a></li>
            <li class="nav-item fs-7"><a class="nav-link custom-link" href="#attributes" data-bs-toggle="tab">
                مشخصات
            </a></li>
        </ul>
        <div class="tab-content p-3">
            <!--            Product Info:start-->
            <div class="tab-pane fade show active" id="productInfo">
                <h2 class="fs-5 mb-3">معرفی</h2>

                <p>
                    نوکیا G21 یکی از گوشی‌های هوشمند میان‌رده و مقرون به‌صرفه شرکت نوکیا است که با توجه به قیمت در نظر
                    گرفته شده، از مشخصات فنی مناسب و قابل قبولی بهره برده است. در نمای رو‌به‌رویی صفحه‌نمایش یکدست و
                    زیبایی با ابعاد 6.5 اینچ و رزولوشن 720×1600 پیکسل از نوع IPS LCD را شاهد هستیم که به لطف بهره بردن
                    از نرخ بروزرسانی 90 هرتز و تراکم پیکسل 270ppi، توانایی ارائه عملکرد خوب و کاملا قابل قبولی را دارد.
                    در قسمت پشتی هم یک سنسور دروبین اصلی با رزولوشن 50 مگاپیکسل در کنار دو سنسور با رزولوشن 2 مگاپیکسل
                    از نوع سنجش عمق و ماکرو، سنسور‌های دوربین سه‌گانه این گوشی میان‌رده را تشکیل می‌دهند. بریدگی قطره‌ای
                    شکل ناچ در قسمت بالایی و مرکزی صفحه‌نمایش هم سنسور دوربین سلفی با رزولوشن 8 مگاپیکسل را در خود جای
                    داده است. پردازنده میان‌رده Unisoc T606 هم این گوشی را همراهی می‌کند که سبب شده نوکیا G21 توانایی
                    ارائه عملکرد مناسبی در اجرای نرم‌افزار‌های محبوب و بازی‌های نه‌چندان سنگین داشته باشد. اما یکی از
                    معیار‌ها برای خرید یک گوشی میان‌رده، بهره بردن از باتری قدرتمند است. نوکیا G21 هم از باتری قدرتمندی
                    با میزان ظرفیت 5050 میلی‌آمپر‌ساعت بهره برده که به ازای هر بار شارژ صد درصدی، طول عمر مفید (زمان
                    آماده به‌کار) بسیار خوب و قابل قبولی را ارائه می‌کند. قابلیت امنیتی و بسیار پرکاربرد حسگر اثر انگشت
                    هم در قسمت کناری روی دکمه پاور قرار گرفته است.
                </p>
            </div>
            <!--            Product Info:end-->

            <!--            Product Attributes:start-->
            <div class="tab-pane fade" id="attributes">
                <h2 class="fs-5">مشخصات</h2>
                <div class="attrs">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                        <ul>
                            <li class="d-flex justify-content-between align-items-center mb-4">
                                <p class="gray-600">وزن</p>
                                <p class="pb-1 fs-7">۱.۲ کیلوگرم</p>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-4">
                                <p class="gray-600">ابعاد</p>
                                <p class="pb-1 fs-7">
                                    ۲۸۸x۲۰۰x۱۹.۹</p>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-4">
                                <p class="gray-600">سازنده پردازنده</p>
                                <p class="pb-1 fs-7">AMD</p>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-4">
                                <p class="gray-600">سری پردازنده</p>
                                <p class="pb-1 fs-7">ATHLON</p>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-4">
                                <p class="gray-600">مدل پردازنده</p>
                                <p class="pb-1 fs-7">
                                    Athlon Silver ۳۰۵۰e</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Product Attributes:end-->
        </div>
    </section>
    <!--    Product Tabs:end-->

     <!--    Similar Products:start-->
    <section class="similar-products border-radius-3xl border border-gray-300 mt-4 pb-4">
        <!--        Section Title:start-->
        <h2 class="my-4 section-title fs-5 ms-4">
            محصولات مشابه
        </h2>
        <!--        Section Title:end-->

        <!--            Slider:start-->
        <div class="swiper similarSlider">
            <div class="swiper-wrapper">

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="{{asset('userassets/img/single-product-1.jpg')}}" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="{{asset('userassets/img/laptop-1.jpg')}}" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="{{asset('userassets/img/laptop-3.jpg')}}" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="assets/img/laptop-2.jpg" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="assets/img/laptop-4.jpg" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="assets/img/single-product-1.jpg" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

                <!--            Similar Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="similar-item px-2">
                        <img src="assets/img/laptop-3.jpg" alt="" title="" class="img-fluid">
                        <h3 class="fs-7 gray-800 mt-3">خرید لپ تاپ لنوو</h3>
                        <p class="fs-7 gray-900 text-end mt-2">18,000 تومان</p>
                        <a href="" title="" class="stretched-link px-2"></a>
                    </div>
                </div>
                <!--            Similar Item:end-->

            </div>
            <div class="swiper-button-next bg-light border-radius-circle"></div>
            <div class="swiper-button-prev bg-light border-radius-circle"></div>
        </div>
        <!--            Slider:end-->
    </section>
    <!--    Similar Products:end-->

</main>
<!--Main:end-->

@endsection