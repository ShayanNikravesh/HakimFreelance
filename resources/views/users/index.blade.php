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
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="insertNewBrokerModal">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        ثبت نام
                        <span class="d-block fs-7 gray-600 fw-lighter mt-2">مشخصات خود را کنید.</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Broker.store')}}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام</label>
                            <input type="text" name="f_name" class="form-control border-radius-xl" id="name" placeholder="نام خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام خانوادگی</label>
                            <input type="text" name="l_name" class="form-control border-radius-xl" id="name" placeholder="نام خانوادگی خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label fw-bold">شماره موبایل</label>
                            <input type="tel" name="mobile" class="form-control border-radius-xl" id="phoneNumber" placeholder="09xxxxxxxxx">
                        </div>
                        <div class="col-md-6">
                            <label for="gender" class="form-label fw-bold">انتخاب جنسیت</label>
                            <select name="gender" id="gender" class="wide border-radius-xl form-control">
                                <option selected>انتخاب کنید</option>
                                <option value="1">مرد</option>
                                <option value="2">زن</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nationalCode" class="form-label fw-bold">کد ملی</label>
                            <input name="national_code" type="text" class="form-control border-radius-xl" id="nationalCode" placeholder="کد ملی را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label fw-bold">عکس</label>
                            <input name="photo" type="file" class="form-control border-radius-xl" id="photo">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-bold">رمز</label>
                            <input name="password" type="password" class="form-control border-radius-xl" id="password" placeholder="رمز را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label fw-bold">نکرار رمز</label>
                            <input name="password_confirmation" type="password" class="form-control border-radius-xl" id="password_confirmation" placeholder="تکرار رمز را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="tag" class="form-label fw-bold">انتخاب دسته</label>
                            <select name="tag" id="tag" class="wide border-radius-xl form-control">
                                <option selected>انتخاب کنید</option>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="desc" class="form-label fw-bold">توضیحات</label>
                            <textarea name="desc" class="form-control border-radius-xl" id="desc" rows="2" placeholder="توضیحات را وارد کنید ..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label fw-bold">آدرس</label>
                            <textarea name="address" class="form-control border-radius-xl" id="address" rows="2" placeholder="آدرس را وارد کنید ..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn custom-btn-primary border-radius-xl">ثبت</button>
                            <button type="button" class="text-info btn fw-lighter" data-bs-dismiss="modal">انصراف و برگشت</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

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