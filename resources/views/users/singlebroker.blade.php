@extends('users.layouts.master')

@section('content')

    <!--Main:start-->
<main class="container mt-xxxx-large">
    <!--    BreadCrumb:start-->
    {{-- <nav class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item fs-8"><a href="#"></a></li>
        </ol>
    </nav> --}}
    <!--BreadCrumb:end-->

    <!--Product Details:start-->
    <section class="product-details">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 position-relative">
                <!--Product Images:start-->
                <div class="product-images">
                    <img class="xzoom img-fluid" src="{{asset($broker->photo)}}" xoriginal="{{asset($broker->photo)}}"/>
                </div>
                <!--Product Images:end-->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <!--Product Details:start-->
                <div class="product-details">
                    <!--Product Title:start-->
                    <h1 class="fs-5 fw-bold">مشخصات کارگزار:</h1>
                    <span class="gray-400 en-title d-block pb-1 fs-7"></span>
                    <!--Product Title:end-->


                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                            <!--broker Details Right:start-->
                            <div class="product-details-right">
                                <div class="product-attr my-4">
                                    <p class="fs-5 fw-bold mb-2">ویژگی ها</p>
                                    <ul>
                                        <li class="fs-6">
                                            <span class="gray-600">نام :</span>
                                            <span>{{$broker->f_name}}</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">نام خانوادگی :</span>
                                            <span>{{$broker->l_name}}</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">توضیحات :</span>
                                            <p>{{$broker->desc}}</p>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">آدرس :</span>
                                            <p>{{$broker->address}}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--broker Details Right:end-->
                            <button class="btn btn-primary">ارسال پیام</button>
                        </div>
                    </div>
                </div>
                <!--Product Details:end-->
            </div>
        </div>
    </section>
    <!--Product Details:end-->
</main>
<!--Main:end-->

@endsection