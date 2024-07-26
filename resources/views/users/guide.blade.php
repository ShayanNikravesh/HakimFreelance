@extends('users.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Blog Section:start-->
    <section class="blog mt-5">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h2 class="fw-bold fs-6">راهنما</h2>
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