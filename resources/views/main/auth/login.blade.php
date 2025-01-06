<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>ورود</title>

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
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif --}}
        <img src="{{asset('adminassets/media/logos/HakimFreelance.png')}}" alt="" title="" class="mx-auto d-block">
        <div class="form-info text-center my-3">
            <h1 class="fw-bold fs-5">ورود کاربران</h1>
        </div>
        <form action="{{route('Authenticate')}}" method="POST">
            @csrf
            <label for="national_code" class="form-label fw-bold">کد ملی:</label>
            <input type="text" name="national_code" class="form-control border-radius-xl mb-1" placeholder="کد ملی را وارد کنید.">
            <label for="password" class="form-label fw-bold">رمز عبور:</label>
            <input type="password" name="password" class="form-control border-radius-xl mt-2" placeholder="رمز عبور را وارد کنید.">
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary btn-block border-radius-xl fw-bold">ورود</button>
            </div>
        </form>
    </div>
</div>
</body>
<!--Body::end-->

</html>
