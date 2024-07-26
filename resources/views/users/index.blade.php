@extends('users.layouts.master')

@section('content')

<!--Story Section:start-->
<div class="container mt-xxxx-large">

</div>
<!--Story Section:end-->

<!--Header::start-->
<header class="header">
    <!-- Slider:start -->
    <div class="swiper headerSlider">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <a href="javascript:;" title=""><img src="{{asset($banner->photo)}}" class="img-fluid"alt=""></a>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next bg-light border-radius-circle"></div>
        <div class="swiper-button-prev bg-light border-radius-circle"></div>
        <div class="swiper-pagination"></div>

    </div>
    <!-- Slider:end -->
</header>
<!--Header::end-->

<!--Main:start-->
<main class="container mt-5">

    <!--Best Suggestions:start-->
    {{-- <div class="best-suggestions border-radius-2xl py-1">
        <!-- Slider:start -->
        <div class="swiper bestSuggestionsSlider">
            <div class="swiper-wrapper p-2">
                <div class="swiper-slide text-center d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('userassets/img/Amazings.png')}}" alt="" class="amazing-img">
                    <img src="{{asset('userassets/img/box.png')}}" alt="" class="box-img d-block">
                    <a href="#" class="text-white d-block mt-3" title="">مشاهده همه <i
                            class="fa fa-angle-left align-baseline ms-1"></i></a>
                </div>
                <div class="swiper-slide border-radius-1-tr-br">
                    <img src="{{asset('userassets/img/coat-1.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold d">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-2.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-3.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-4.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-5.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-6.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-7.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-8.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('userassets/img/coat-9.jpg')}}" class="img-fluid" alt="">
                    <div class="product-details d-flex justify-content-between align-items-center mt-4">
                        <span class="discount-amount text-white px-2 border-radius-3xl fs-6 fw-bold">25 %</span>
                        <span class="discounted_price fw-bold fs-5">269000 <span>تومان</span></span>
                    </div>
                    <del class="d-block real_price float-end gray-500 pe-4">290,000</del>
                    <a href="#" class="stretched-link" title=""></a>
                </div>
                <div class="swiper-slide border-radius-1-tl-bl text-center">
                    <i class="fa fa-angle-left border-gray-300 text-info"></i>
                    <a href="#" class="stretched-link d-block text-black-50" title="">مشاهده همه</a>
                </div>
            </div>
            <div class="swiper-button-next bg-light border-radius-circle border-gray-400"></div>
            <div class="swiper-button-prev bg-light border-radius-circle border-gray-400"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Slider:end -->
    </div> --}}
    <!--Best Suggestions:End-->

    <!--    Banners:start-->

    <!--    Banners:end-->

    <!--    Categories:start-->

    <!--    Categories:end-->

    {{-- <!--Banners:start-->
    <div class="banners my-5">
        <div class="row">
            <div class="col-6">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-md-1.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
            <div class="col-6">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-md-2.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
        </div>
    </div>
    <!--Banners:end--> --}}

    <!--Best Brands:start-->
    <section class="best-brands border-radius-3xl border border-gray-300 mt-4 pb-4">
        <!--Section Title:start-->
        <h2 class="text-center my-4 section-title fs-4">
            مشاغل اخیر
        </h2>
        <!--Section Title:end-->

        <!--Slider:start-->
        <div class="swiper brandsSlider">
            <div class="swiper-wrapper">
                @foreach($latestTags as $tag)
                    <!--Brands Item:start-->
                    <div class="swiper-slide position-relative">
                        <div class="brands-item d-flex justify-content-center align-items-center">
                            <a href="{{route('Tags.show',$tag->id)}}" title="" class="btn">
                                <p>{{ $tag->name }}</p>
                            </a>
                        </div>
                    </div>
                    <!--Brands Item:end-->
                @endforeach
            </div>
            <div class="swiper-button-next bg-light border-radius-circle"></div>
            <div class="swiper-button-prev bg-light border-radius-circle"></div>
        </div>
        <!--Slider:end-->
    </section>
    <!--Best Brands:end-->

    <!--Blog Section:start-->
    <section class="blog mt-5">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h2 class="fw-bold fs-6">خواندنی ها</h2>
            <a href="" class="text-info fs-8">
                مطالب بیشتر در برگ شاپ مگ
                <i class="fa fa-angle-left ps-1"></i>
            </a>
        </div>
        <!-- Blog Items:start-->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href="javascript:;"><img src="{{asset('userassets/img/register.png')}}" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="javascript:;" title="" class="fs-6 fw-bold">
                                 ثبت نام کاربر:
                            </a>
                        </h2>
                        <p class="fs-8">
                            افرادی که می خواهند از خدمات کارگزاران بهره مند شوند باید اطلاعات مورد نیاز را وارد کنند در صورت تایید مدیریت ثبت نام می شوند.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href="javascript:;"><img src="{{asset('userassets/img/register.png')}}" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="javascript:;" title="" class="fs-6 fw-bold">
                                ثبت نام کارگزار:
                            </a>
                        </h2>
                        <p class="fs-8">
                            کارگزارانی که می خواهند خدمات ارائه دهند باید اطلاعات مورد نظر را در سایت وارد کنند و پس از بررسی و تایید مدیریت می توانند در سایت به فعالیت بپردازند.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href="javascript:;"><img src="{{asset('userassets/img/info.jpg')}}" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="javascript:;" title="" class="fs-6 fw-bold">
                                درباره:
                            </a>
                        </h2>
                        <p class="fs-8">
                            این سایت فرصتی برای برنامه نویسان و گرافیست ها و دیگر مشاغل برای معرفی خود و مهارت هایشان است.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Blog Items:end-->
    </section>
    <!--Blog Section:end-->
</main>
<!--Main:end-->

@endsection

