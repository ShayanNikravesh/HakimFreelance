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

                        <!--User Panel Profile:start-->
                        <div class="user-panel-profile mt-3 border border-radius-xl">
                            <!--User Panel Profile Header:start-->
                            <div class="user-panel-profile-header d-flex justify-content-between align-items-center p-3 border-bottom-gray-300 mb-3">
                                <p class="fw-bold">مدیریت پروفایل</p>
                            </div>
                            <!--User Panel Profile Header:end-->

                            <!--User Panel Profile Content:start-->
                            <div class="user-panel-profile-content p-3">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                @endif
                                <form class="row g-3" action="{{route('Users.update','User')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <label for="f_name" class="form-label fw-bold">نام:</label>
                                        <input type="text" class="form-control border-radius-xl" name="f_name" id="name1" placeholder="نام خود را وارد کنید ..." value="{{$user->f_name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="l_name" class="form-label fw-bold">نام خانوادگی:</label>
                                        <input type="text" class="form-control border-radius-xl" name="l_name" id="name1" placeholder="نام خود را وارد کنید ..." value="{{$user->l_name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber1" class="form-label fw-bold">شماره موبایل:</label>
                                        <input type="tel" class="form-control border-radius-xl" name="mobile" id="phoneNumber1" placeholder="09xxxxxxxxx" value="{{$user->mobile}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber1" class="form-label fw-bold">کد ملی:</label>
                                        <input type="tel" class="form-control border-radius-xl" name="national_code" id="phoneNumber1" placeholder="09xxxxxxxxx" value="{{$user->national_code}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label fw-bold">رمز عبور جدید</label>
                                        <input type="password" class="form-control border-radius-xl" name="password" id="password"placeholder="رمز جدید را وارد کنید">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="repassword" class="form-label fw-bold">تکرار رمز عبور</label>
                                        <input type="password" class="form-control border-radius-xl" name="password_confirmation" id="repassword"placeholder="رمز جدید را دوباره وارد کنید">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn custom-btn-primary border-radius-xl">ثبت</button>
                                    </div>
                                </form>
                            </div>
                            <!--User Panel Profile Content:end-->
                        </div>
                        <!--User Panel Profile:end-->
                    </div>
                    <!--User Panel Content:end-->
                </div>
            </div>
        </div>
    </div>
    <!--    User Panel Wrapper:end-->
</main>
<!--User Panel:end-->

@endsection