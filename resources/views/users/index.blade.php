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
            <div class="swiper-slide"><a href="" title=""><img src="{{asset('userassets/img/header-slider-1.jpg')}}" class="img-fluid"
                                                               alt=""></a></div>
            <div class="swiper-slide"><a href="" title=""><img src="{{asset('userassets/img/header-slider-2.jpg')}}" class="img-fluid"
                                                               alt=""></a></div>
            <div class="swiper-slide"><a href="" title=""><img src="{{asset('userassets/img/header-slider-3.jpg')}}" class="img-fluid"
                                                               alt=""></a></div>
            <div class="swiper-slide"><a href="" title=""><img src="{{asset('userassets/img/header-slider-4.jpg')}}" class="img-fluid"
                                                               alt=""></a></div>
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
    <div class="banners mt-4">
        <div class="row">
            <div class="col-6 col-lg-3 col-xl-3 mb-3">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-sm-1.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3 col-xl-3 mb-3">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-sm-2.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3 col-xl-3 mb-3">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-sm-3.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3 col-xl-3 mb-3">
                <a href="" title="">
                    <img src="{{asset('userassets/img/banner-sm-4.jpg')}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                </a>
            </div>
        </div>
    </div>
    <!--    Banners:end-->

    <!--    Categories:start-->
    <section class="categories mt-5">
        <h2 class="text-center fs-4">دسته بندی ها</h2>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 mb-3">
                <!--                Row:start-->
                <div class="row">
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-1.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">خانه و آشپرخانه</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-2.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">اسباب بازی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-3.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">شخصی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-4.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-5.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <div class="clearfix"></div>
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-6.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">خانه و آشپرخانه</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-7.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">اسباب بازی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-8.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">شخصی</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-9.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                    <!--                Category Item:start-->
                    <div class="col-4 col-lg-2 col-xl-2 mb-4">
                        <a href="" title="">
                            <img src="{{asset('userassets/img/category-10.jpg')}}" alt="" class="img-fluid img-opacity">
                            <strong class="text-center d-block fs-7">ورزش</strong>
                        </a>
                    </div>
                    <!--                Category Item:end-->
                </div>
                <!--                Row:end-->
            </div>
        </div>
    </section>
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
    <section class="suggestions">
        <h2 class="text-center fs-4">پیشنهاد برگ شاپ</h2>
        <div class="wrapper mt-4 border-radius-3xl border border-gray-300 overflow-hidden">

            <div class="row">
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-1.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-2.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-3.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-4.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-5.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-6.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-7.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-8.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-9.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-10.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-11.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
                <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                    <div class="p-3">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/suggest-12.jpg')}}" alt="" title="" class="img-fluid p-1">
                            <h4 class="mt-3 fs-7">گوشی</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--    Suggestions:end-->

    <!--    Best Brands:start-->
    <section class="best-brands border-radius-3xl border border-gray-300 mt-4 pb-4">
        <!--        Section Title:start-->
        <h2 class="text-center my-4 section-title fs-4">
            <i class="fa fa-star"></i>
            محبوب ترین برندها
        </h2>
        <!--        Section Title:end-->

        <!--            Slider:start-->
        <div class="swiper brandsSlider">
            <div class="swiper-wrapper">

                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-1.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->

                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-2.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-3.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-4.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-8.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-7.jpg')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-8.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-9.jpg')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-10.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->
                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-11.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->

                <!--            Brands Item:start-->
                <div class="swiper-slide position-relative">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <a href="" title="" class="stretched-link">
                            <img src="{{asset('userassets/img/brand-13.png')}}" alt="" title="" class="img-fluid p-3">
                        </a>
                    </div>
                </div>
                <!--            Brands Item:end-->

            </div>
            <div class="swiper-button-next bg-light border-radius-circle"></div>
            <div class="swiper-button-prev bg-light border-radius-circle"></div>
        </div>
        <!--            Slider:end-->
    </section>
    <!--    Best Brands:end-->

    <!--    Some Products:start-->
    <section class="some-products border-radius-3xl border border-gray-300 mt-4 overflow-hidden">
        <!--        Row:start-->
        <div class="row">
            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-1.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-2.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-3.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-4.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-5.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-6.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-7.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-8.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-9.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-10.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-11.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-12.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-13.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-14.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-15.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-16.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->
        </div>
        <!--        Row:end-->
    </section>
    <!--    Some Products:end-->

    <!--    Best Sales:start-->
    <section class="best-sales mt-4 border-radius-3xl border border-gray-300 position-relative">
        <!--        Section Title:start-->
        <h2 class="text-center my-4 section-title fs-4">
            <i class="fa fa-fire fs-6"></i>
            پر فروش ترین کالاها
        </h2>
        <!--        Section Title:end-->
        <!--            Slider:start-->
        <div class="swiper bestSales">
            <div class="swiper-wrapper">

                <!--            Best Sale Item:start-->
                <div class="swiper-slide">
                    <div class="best-sale-item">
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-1.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">1</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل سامسونگ</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-2.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">2</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل هاوایی</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-3.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">3</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل نوکیا</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--            Best Sale Item:end-->

                <!--            Best Sale Item:start-->
                <div class="swiper-slide">
                    <div class="best-sale-item">
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-4.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">1</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل سامسونگ</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-5.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">2</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل هاوایی</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-6.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">3</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل نوکیا</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--            Best Sale Item:end-->

                <!--            Best Sale Item:start-->
                <div class="swiper-slide">
                    <div class="best-sale-item">
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-7.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">1</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل سامسونگ</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-8.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">2</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل هاوایی</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-9.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">3</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل نوکیا</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--            Best Sale Item:end-->

                <!--            Best Sale Item:start-->
                <div class="swiper-slide">
                    <div class="best-sale-item">
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-10.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">1</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل سامسونگ</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-11.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">2</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل هاوایی</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-12.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">3</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل نوکیا</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--            Best Sale Item:end-->

                <!--            Best Sale Item:start-->
                <div class="swiper-slide">
                    <div class="best-sale-item">
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-13.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">1</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل سامسونگ</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-14.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">2</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل هاوایی</p>
                            </div>
                        </a>
                        <a href="" title=""
                           class="stretched-link d-flex justify-content-around align-items-center mb-2">
                            <img src="{{asset('userassets/img/some-p-15.jpg')}}" alt="" title="" class="img-fluid p-3 object-contain">
                            <span class="text-info fs-3 fw-bold">3</span>

                            <div class="best-sale-title pb-4 ms-3">
                                <p class="fs-7">گوشی موبایل نوکیا</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--            Best Sale Item:end-->

            </div>
            <div class="swiper-button-next bg-light border-radius-circle"></div>
            <div class="swiper-button-prev bg-light border-radius-circle"></div>
        </div>
        <!--            Slider:end-->

        <!--        See All:start-->
        <a href="" class="text-info d-block text-center my-3 fs-7">مشاهده همه</a>
        <!--        See All:ens-->

    </section>
    <!--    Best Sales:end-->


    <!--    Some Products:start-->
    <section class="some-products border-radius-3xl border border-gray-300 mt-4 overflow-hidden">
        <!--        Row:start-->
        <div class="row">
            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-1.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-2.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-3.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-4.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-5.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-6.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-7.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-8.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-9.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-10.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-11.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-12.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->

            <!--            Some Products Item:start-->
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="some-products-box p-4">
                    <div class="some-products-title">
                        <h4 class="fs-6 fw-bold">گوشی موبایل</h4>
                        <span class="gray-600 fs-7">بر اساس بازدید های شما</span>
                    </div>
                    <div class="some-products-images mt-3">
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-13.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-14.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-15.jpg')}}" alt="" title="" class="img-fluid"></a>
                        <a href="" title="" class="d-flex justify-content-center align-items-center p-3"><img
                                src="{{asset('userassets/img/some-p-16.jpg')}}" alt="" title="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <!--            Some Products Item:end-->
        </div>
        <!--        Row:end-->
    </section>
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