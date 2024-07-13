@extends('users.layouts.master')

@section('content')

    <!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Broker Details:start-->
    <section class="product-details">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 position-relative">
                <!--Broker Image:start-->
                <div class="product-images">
                    <img class="xzoom img-fluid" src="{{asset($broker->photo)}}" xoriginal="{{asset($broker->photo)}}"/>
                </div>
                <!--Broker Image:end-->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <!--Broker Details:start-->
                <div class="product-details">
                    <!--Broker Title:start-->
                    <h1 class="fs-5 fw-bold">مشخصات کارگزار:</h1>
                    <span class="gray-400 en-title d-block pb-1 fs-7"></span>
                    <!--Broker Title:end-->
                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                            <!--Broker Details Right:start-->
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
                            <!--Broker Details Right:end-->
                            @if (auth()->check())
                                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meesage">ارسال پیام</a>
                                @else
                                <span class="btn btn-danger">جهت ارسال پیام وارد سایت شوید.</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!--Broker Details:end-->
            </div>
        </div>
    </section>
    <!--Broker Details:end-->
    <!--    Product Tabs:start-->
    <section class="product-tabs mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item fs-7">
                <a class="nav-link custom-link" href="#questions" data-bs-toggle="tab">
                    نظرات
                </a>
            </li>
        </ul>
        <div class="tab-content p-3">
            <!--Comments:start-->
            <div class="tab-pane fade" id="questions">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <div class="product-score">
                            <div class="stars">
                                <!--Broker Insert New Comment:start-->
                                <div class="mt-2">
                                    <p class="fs-8">ثبت نظر جدید</p>
                                    <div class="d-grid gap-2 mt-3">
                                        @if (auth()->check())
                                            <a href="" class="btn btn-primary fs-8" data-bs-toggle="modal" data-bs-target="#CommentModal">ثبت نظر</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="CommentModal" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">نظر خود را درباره این کارگزار ثبت کنید.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('comments.store')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                                <input type="hidden" name="broker_id" value="{{$broker->id}}">
                                                                <textarea class="form-control border-radius-xl" name="comment" rows="4"></textarea>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                                                        <div class="d-grid gap-2">
                                                                            <button class="btn custom-btn-primary" type="submit">ثبت</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                                        <p class="fs-8 text-center my-2">
                                                                            نظر شما پس از تایید مدیر ثبت خواهد شد.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <span class="btn btn-danger fs-8">برای ثبت نظر وارد سایت شوید.</span>
                                        @endif
                                    </div>
                                </div>
                                <!--Broker Insert New Comment:end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        <!--Comments:start-->
                        @foreach ($comments as $comment)
                            <div class="comment-box mb-3">
                                <div class="comment-title">
                                    <p class="fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                                            <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1"/>
                                        </svg>
                                        {{$comment->comment}}
                                    </p>
                                </div>
                                <div class="comment-details my-3 border-bottom-gray-150 pb-3 mx-5">
                                    <span class="fs-8 gray-600">1 فروردین 1402</span>
                                    <i class="fa fa-circle fs-11 gray-400"></i>
                                    <span class="fs-8 gray-600">{{$comment->user->f_name.' '.$comment->user->l_name}}</span>
                                </div>
                            </div>
                        @endforeach
                        <!--Comments:end-->
                    </div>
                </div>
            </div>
            <!--Comments:end-->
        </div>
    </section>
    <!--    Product Tabs:end-->
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