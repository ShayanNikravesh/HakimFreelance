@extends('users.layouts.master')

@section('content')

<!--User Panel:start-->
<main class="mt-xxxx-large">
    <!--    User Panel Wrapper:start-->
    <div class="user-panel-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
                    <!--User Panel Aside:start-->
                    @include('users.layouts.aside')
                    <!--User Panel Aside:end-->
                </div>

                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <!--User Panel Content:start-->
                    <div class="user-panel-content">

                        <!--User Panel Comments:start-->
                        <div class="user-panel-comments mt-3 border border-radius-xl">
                            <!--User Panel Comments Header:start-->
                            <div class="user-panel-comments-header d-flex justify-content-between align-items-center p-3 border-bottom-gray-300">
                                <p class="fw-bold">نظرات من</p>
                            </div>
                            <!--User Panel Comments Header:end-->

                            <!--User Panel Comments Content:start-->
                            @foreach ($comments as $comment)
                            <div class="user-panel-comments-content p-4">
                                <!--User Panel Comment Item:start-->
                                <div class="user-panel-comment-item d-flex justify-content-start align-items-center bg-gray-150 p-2 mb-3">
                                    <div class="user-panel-comment-item-image p-3">
                                        <img src="{{asset($comment->broker->photo)}}" alt="">
                                    </div>
                                  <div>
                                      <!--User Panel Comment Item Header:start-->
                                      <div class="user-panel-comment-item-header d-flex justify-content-between align-items-center border-bottom-gray-300 pb-2">
                                          <p class="fw-bold">
                                              {{$comment->broker->f_name.' '.$comment->broker->l_name}}
                                          </p>
                                          <div class="d-flex justify-content-between align-items-center">
                                            @if ($comment->status == 'active')
                                                <span class="badge d-block custom-box-shadow-s-1 bg-green">تایید شده</span>
                                                @else
                                                <span class="badge d-block custom-box-shadow-s-1 bg-warning">در انتظار تایید</span>
                                            @endif
                                          </div>
                                      </div>
                                      <!--User Panel Comment Item Header:end-->
                                      <!--User Panel Comment Item Content:start-->
                                      <div class="user-panel-comment-item-content">
                                        <p class="py-3 gray-900 fw-light">
                                            {{$comment->comment}}                                          
                                        </p>
                                      </div>
                                      <!--User Panel Comment Item Content:end-->
                                  </div>
                                </div>
                                <!--User Panel Comment Item:end-->
                            </div>
                            @endforeach
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