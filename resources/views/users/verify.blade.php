<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>تایید موبایل</title>

    <!--Bootstrap 5 RTL-->
    <link rel="stylesheet" href="{{asset('userassets/css/vendors/bootstrap/bootstrap.rtl.css')}}">
    <!--Fontawesome 5-->
    <link rel="stylesheet" href="{{asset('userassets/css/vendors/fontawesome/fontawesome.min.css')}}">
    <!--Main Styles-->
    <link rel="stylesheet" href="{{asset('userassets/css/style.css')}}">
</head>
<!--Head::end-->

<!--Body::start-->
<body>
<div class="action-wrapper d-flex justify-content-center align-items-center h-100">
    <div class="form p-4 border border-radius-3xl border-gray-200">
        <img src="{{assset('userassets/img/logo.png')}}" alt="" title="" class="mx-auto d-block">
        <a href="login.html"><i class="fa fa-arrow-right position-absolute"></i></a>
        <div class="form-info text-right my-3">
            <h1 class="fw-bold fs-5">کد تایید را وارد کنید</h1>
        </div>
        <form action="">
            <div class="enter-code d-flex justify-content-between align-items-center ltr">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
                <input type="text" class="pin form-control text-center fs-4 border-radius-2xl">
            </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary btn-block border-radius-xl fw-bold">ادامه</button>
            </div>
        </form>
    </div>
</div>

<!--Confirm Code Script(only for this page-->
<script src="{{asset('userassets/js/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('userassets/js/confirm-code.js')}}"></script>
</body>
<!--Body::end-->

</html>