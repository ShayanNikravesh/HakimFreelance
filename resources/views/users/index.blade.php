@extends('users.layouts.master')

@section('content')

<!--Story Section:start-->
<div class="container mt-xxxx-large">
    <div class="story-section my-3 text-center px-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-around align-items-center mb-3">
                <!--                Story Item:start-->
                <div class="story-item">
                    <img src="{{asset('userassets/img/story-1.jpg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">سشوار</strong>
                </div>
                <!--                Story Item:end-->

                <!--                Story Item:start-->
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                    <img src="{{asset('userassets/img/story-2.jpg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">دکوری</strong>
                </div>
                <!--                Story Item:end-->

                <!--                Story Item:start-->
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                    <img src="{{asset('userassets/img/story-3.jpg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">تخفیف پلاس</strong>
                </div>
                <!--                Story Item:end-->

                <!--                Story Item:start-->
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                    <img src="{{asset('userassets/img/story-4.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">بهداشتی</strong>
                </div>
                <!--                Story Item:end-->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-around align-items-center mb-3">
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story5">
                    <img src="{{asset('userassets/img/story-5.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">وقت سفر</strong>
                </div>
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story6">
                    <img src="{{asset('userassets/img/story-7.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">پیراهن</strong>
                </div>
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story7">
                    <img src="{{asset('userassets/img/story-8.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">آرایش صورت</strong>
                </div>
                <div class="story-item" data-bs-toggle="modal" data-bs-target="#story8">
                    <img src="{{asset('userassets/img/story-6.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                         data-bs-toggle="modal" data-bs-target="#storyBanners">
                    <strong class="fs-7">برترین ها</strong>
                </div>
            </div>
        </div>
        <!--        Show Story Details:start-->
        <div class="modal fade" id="storyBanners" tabindex="-1" data-bs-backdrop="static"
             data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <button type="button" data-bs-dismiss="modal" class="btn-close btn-close-white"></button>
                    <div class="swiper storySlider w-100 position-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-2.jpeg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-3.jpeg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-4.jpeg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-5.jpeg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-6.jpg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-7.jpg')}}" alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title=""><img src="{{asset('userassets/img/story-banner-8.jpg')}}" alt=""/></a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>

                    </div>

                </div>
            </div>
        </div>
        <!--        Show Story Details:end-->
    </div>
</div>
<!--Story Section:end-->

<!--Header::start-->
<header class="header">
    <!-- Slider:start -->
    <div class="swiper headerSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="" title=""><img src="{{asset('userassets/img/header-slider-1.jpg')}}" class="img-fluid"alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="" title=""><img src="{{asset('userassets/img/header-slider-2.jpg')}}" class="img-fluid"alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="" title=""><img src="{{asset('userassets/img/header-slider-3.jpg')}}" class="img-fluid"alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="" title=""><img src="{{asset('userassets/img/header-slider-4.jpg')}}" class="img-fluid"alt=""></a>
            </div>
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
    <div class="best-suggestions border-radius-2xl py-1">
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
    </div>
    <!--Best Suggestions:End-->

    <!--    Banners:start-->
    
    <!--    Banners:end-->

    <!--    Categories:start-->
    
    <!--    Categories:end-->

    <!--    Banners:start-->
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
    <!--    Banners:end-->

    <!--    Suggestions:start-->
   
    <!--    Suggestions:end-->

    <!--    Best Brands:start-->
   
    <!--    Best Brands:end-->

    <!--    Some Products:start-->
   
    <!--    Some Products:end-->

    <!--    Best Sales:start-->
    
    <!--    Best Sales:end-->


    <!--    Some Products:start-->
   
    <!--    Some Products:end-->

    <!--    Blog Section:start-->
    <section class="blog mt-5">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h2 class="fw-bold fs-6">خواندنی ها</h2>
            <a href="" class="text-info fs-8">
                مطالب بیشتر در برگ شاپ مگ
                <i class="fa fa-angle-left ps-1"></i>
            </a>
        </div>

        <!--        Blog Items:start-->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href=""><img src="{{asset('userassets/img/blog-2.jpg')}}" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="" title="" class="fs-6 fw-bold">
                                چگونه برنامه نویس شویم؟
                            </a>
                        </h2>
                        <p class="fs-8">
                            بهترین راهکار های موجود برای تبدیل به برنامه نویس شدن حرفه ای و ماندگار شدن در این کار
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href=""><img src="{{asset('userssets/img/blog-3.jpg')}}a" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="" title="" class="fs-6 fw-bold">
                                چگونه برنامه نویس شویم؟
                            </a>
                        </h2>
                        <p class="fs-8">
                            بهترین راهکار های موجود برای تبدیل به برنامه نویس شدن حرفه ای و ماندگار شدن در این کار
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                    <div class="blog-item-img">
                        <a href=""><img src="{{asset('userassets/img/blog-1.jpg')}}" alt="" title="" class="img-fluid card-img"></a>
                    </div>
                    <div class="blog-item-contents px-2 pb-3">
                        <h2 class="mt-1">
                            <a href="" title="" class="fs-6 fw-bold">
                                چگونه برنامه نویس شویم؟
                            </a>
                        </h2>
                        <p class="fs-8">
                            بهترین راهکار های موجود برای تبدیل به برنامه نویس شدن حرفه ای و ماندگار شدن در این کار
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--        Blog Items:end-->
    </section>
    <!--    Blog Section:end-->
</main>
<!--Main:end-->

@endsection