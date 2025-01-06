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
                            <div class="user-panel-content">
                                <!--User Panel Comments:start-->
                                <div class="user-panel-comments mt-3 border border-radius-xl">
                                    <!-- User Panel Comments Header:start-->
                                    <div
                                        class="user-panel-comments-header d-flex justify-content-between align-items-center p-3 border-bottom-gray-300">
                                        <p class="fw-bold">پیام ها</p>
                                    </div>
                                    <!--User Panel Comments Header:end-->
                                    <!--User Panel Comments Content:start-->
                                    <div class="card">
                                        <div class="card-header msg_head">
                                            <div class="d-flex bd-highlight"></div>
                                        </div>
                                        <div class=" card-body">
                                            @foreach($messages as $message)
                                                @if($message->sender === 'user')
                                                    <div class="d-flex justify-content-start mb-4">
                                                        <div class=" p-1 rounded" style="background-color: #4cd137">
                                                            {{ $message->message_content }}
                                                            <br>
                                                            <span class="text-light font-size-base mr-2"
                                                                  style="font-size: 10px"><?php echo verta($message->created_at); ?></span>
                                                        </div>
                                                    </div>
                                                @elseif($message->status === 'active')
                                                    <div class="d-flex justify-content-end mb-4">
                                                        <div class="bg-warning p-1 rounded">
                                                            {{ $message->message_content }}
                                                            <br>
                                                            <span class="text-light mr-2"
                                                                  style="font-size: 10px"><?php echo verta($message->created_at); ?></span>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="card-footer">
                                            <form action="{{ route('messages.store')}}" method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="hidden" value="{{ $broker_id }}" name="broker_id">
                                                    <input name="message_content" class="form-control type_msg"
                                                           placeholder="پیامتان را بنویسید..."></input>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary"><i
                                                                class="fas fa-location-arrow"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--User Panel Comments Content:end-->
                                </div>
                                <!--User Panel Comments:end-->
                            </div>
                            <!--User Panel Comments:end-->
                        </div>
                        <!--User Panel Content:end-->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--User Panel Wrapper:end-->
    </main>
    <!--User Panel:end-->
@endsection
