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
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meesage">ارسال پیام</a>
                        </div>
                    </div>
                </div>
                <!--broker Details:end-->
            </div>
        </div>
    </section>
    <!--broker Details:end-->

    <!--modal-->
    <div class="modal fade" id="meesage">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">پیام جدید:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">گیرنده:</label>
                        <span class="form-control" id="recipient-name">{{$broker->f_name.' '.$broker->l_name}}</span>
                    </div>
                    <form action="{{route('message.store')}}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="broker_id" value="{{$broker->id}}">
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">پیام:</label>
                            <textarea class="form-control" name="message" id="message-text"></textarea>
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
</main>
<!--Main:end-->

@endsection