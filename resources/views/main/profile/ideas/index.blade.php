@extends('main.layouts.master')

@section('content')

    <!--User Panel:start-->
    <main class="mt-xxxx-large">
        <!--    User Panel Wrapper:start-->
        <div class="user-panel-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
                        <!--User Panel Aside:start-->
                        @include('main.layouts.aside')
                        <!--User Panel Aside:end-->
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                        <!--User Panel Content:start-->
                        <div class="user-panel-content">

                            <!--User Panel Comments:start-->
                            <div class="user-panel-comments mt-3 border border-radius-xl">
                                <!--User Panel Comments Header:start-->
                                <div
                                    class="user-panel-comments-header d-flex justify-content-between align-items-center p-3 border-bottom-gray-300">
                                    <p class="fw-bold">ایده های من</p>
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#IdeaModal">ثبت
                                        ایده جدید</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="IdeaModal" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">ایده خود را ثبت کنید.</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('ideas.store')}}" method="POST"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <textarea class="form-control border-radius-xl" name="idea"
                                                                  rows="4"></textarea>
                                                        <div class="col-md-6">
                                                            <label for="photo" class="form-label fw-bold">فایل</label>
                                                            <input name="file" type="file"
                                                                   class="form-control border-radius-xl" id="photo">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                                                <div class="d-grid gap-2">
                                                                    <button class="btn custom-btn-primary w-50"
                                                                            type="submit">ثبت
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                                <p class="fs-8 text-center my-2">
                                                                    ایده شما توسط مدیر بررسی خواهد شد.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--User Panel Comments Header:end-->

                                <!--User Panel Comments Content:start-->
                                @if ($ideas->count())
                                    @foreach ($ideas as $idea)
                                        <div class="user-panel-comments-content p-4">
                                            <!--User Panel Comment Item:start-->
                                            <div
                                                class="user-panel-comment-item d-flex justify-content-start align-items-center bg-gray-150 p-2 mb-3">
                                                <div class="user-panel-comment-item-image p-3">
                                                </div>
                                                <div>
                                                    <!--User Panel Comment Item Header:start-->
                                                    <div
                                                        class="user-panel-comment-item-header d-flex justify-content-between align-items-center pb-2">
                                                        <p class="py-3 gray-900 fw-light">
                                                            {{$idea->idea}}
                                                        </p>
                                                    </div>
                                                    <!--User Panel Comment Item Header:end-->
                                                    <!--User Panel Comment Item Content:start-->
                                                    <div class="user-panel-comment-item-content">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            @switch($idea->status)
                                                                @case('accept')
                                                                    <span
                                                                        class="badge d-block custom-box-shadow-s-1 bg-success">تایید شده</span>
                                                                    @break
                                                                @case('reject')
                                                                    <span
                                                                        class="badge d-block custom-box-shadow-s-1 bg-danger">تایید نشده</span>
                                                                    @break
                                                                @case('waiting')
                                                                    <span
                                                                        class="badge d-block custom-box-shadow-s-1 bg-warning">در انتظار تایید</span>
                                                                    @break
                                                                @default
                                                            @endswitch
                                                        </div>
                                                    </div>
                                                    <!--User Panel Comment Item Content:end-->
                                                </div>
                                            </div>
                                            <!--User Panel Comment Item:end-->
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center my-5">
                                        <img src="assets/img/order-empty.svg" alt="">
                                        <p class="fs-8">ایده ای ارسال نکرده اید.</p>
                                    </div>
                                @endif
                                <!--User Panel Comments Content:end-->
                            </div>
                            <!--User Panel Comments:end-->
                        </div>
                        <!--User Panel Content:end-->
                    </div>
                </div>
            </div>
        </div>
        <!--User Panel Wrapper:end-->
    </main>
    <!--User Panel:end-->

@endsection
