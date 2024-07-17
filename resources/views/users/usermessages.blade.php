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
                        <div class="user-panel-content">
                            <!--User Panel Comments:start-->
                            <div class="user-panel-comments mt-3 border border-radius-xl">
                                <!-- User Panel Comments Header:start-->
                                <div class="user-panel-comments-header d-flex justify-content-between align-items-center p-3 border-bottom-gray-300">
                                    <p class="fw-bold">پیغام ها</p>
                                </div>
                                <!--User Panel Comments Header:end-->
                                <!--User Panel Comments Content:start-->
                                <div class="card">
                                    <div class="card-header msg_head">
                                        <div class="d-flex bd-highlight">
{{--                                            <div class="img_cont">--}}
{{--                                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">--}}
{{--                                                <span class="online_icon"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="user_info">--}}
{{--                                                <span>{{ $messages[0]->broker()->first() }}</span>--}}
{{--                                                <p>1767 Messages</p>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>--}}
{{--                                        <div class="action_menu">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fas fa-ban"></i> Block</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                    </div>



                                    @foreach($messages as $message)
                                       @if($message->sender === 'broker')
                                            <div class=" msg_card_body">
                                                <div class="d-flex justify-content-start mb-4">
                                                    <div class="msg_cotainer">
                                                        {{ $message->message_content }}
                                                        <span class="msg_time">{{ $message->created_at }}</span>
                                                    </div>
                                                </div>
                                        @else
                                                    <div class="d-flex justify-content-end mb-4">
                                                        <div class="msg_cotainer_send">
                                                            Hi Khalid i am good tnx how about you?
                                                            <span class="msg_time_send">8:55 AM, Today</span>
                                                        </div>
                                                        <div class="img _cont_msg">
                                                            <img src="{{ $message->img }}"   ></div>
                                                    </div>
                                        @endif
                                    @endforeach

                                    </div>
                                    <div class="card-footer">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                            </div>
                                            <textarea name="" class="form-control type_msg" placeholder="پیامتان را بنویسید..."></textarea>
                                            <div class="input-group-append">
                                                <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                                            </div>
                                        </div>
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
    <!--User Panel Wrapper:end-->
</main>
<!--User Panel:end-->
@endsection
@section('style')
    <style>
        .card{
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }

        .card .chat{
            margin-top: auto;
            margin-bottom: auto;
        }
        .card{
            height: 100%;
            border-radius: 15px !important;
            background-color: rgba(0,0,0,0.4) !important;
        }
        .card .contacts_body{
            padding:  0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }
        .card .msg_card_body{
            overflow-y: auto;
        }
        .card .card-header{
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }
        .card .card-footer{
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }
        .card .container{
            align-content: center;
        }
        .card .search{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
        }
        .card .search:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .card .type_msg{
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
        }
        .card .type_msg:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .card .attach_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .card .send_btn{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .card .contacts li{
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }
        .card .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;

        }
        .card .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa;

        }
        .card .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .card .img_cont_msg{
            height: 40px;
            width: 40px;
        }
        .card .online_icon{
            position: absolute;
            height: 15px;
            width:15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border:1.5px solid white;
        }
        .card .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }
        .card .user_info span{
            font-size: 20px;
            color: white;
        }
        .card .user_info p{
            font-size: 10px;
            color: rgba(255,255,255,0.6);
        }
        .card .video_cam span{
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }
        .card .msg_cotainer{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }
        .card .msg_cotainer_send{
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }
        .card .msg_time{
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .card .msg_time_send{
            position: absolute;
            right:0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .card .msg_head{
            position: relative;
        }
        .card #action_menu_btn{
            position: absolute;
            left: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .card .action_menu{
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            left: 15px;
            display: none;
        }
        .card .action_menu ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .card .action_menu ul li{
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }
        .card .action_menu ul li i{
            padding-right: 10px;

        }
        .card .action_menu ul li:hover{
            cursor: pointer;
            background-color: rgba(0,0,0,0.2);
        }
    </style>
@endsection
@section('head')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#action_menu_btn').click(function(){
                $('.action_menu').toggle();
            });
        });
    </script>
@endsection
