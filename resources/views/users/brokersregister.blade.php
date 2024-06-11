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
        <img src="assets/img/logo.png" alt="" title="" class="mx-auto d-block">
        <div class="form-info text-right my-3">
            <h1 class="fw-bold fs-5">ثبت نام</h1>
            <div class="form-info-text my-4 gray-600">
                <p class="fs-7">سلام!</p>
                <p class="fs-7">لطفا مشخصات خود را وارد کنید.</p>
            </div>
        </div>
        <form action="POST" action="">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>نام:</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>
                <div class="col-lg-6">
                    <label>نام خانوادگی:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>کد ملی:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="national_code"/>
                </div>
                <div class="col-lg-6">
                        <label>توضیحات:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="desc"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>آدرس:</label>
                    <input type="text" class="form-control" name="address"/>
                </div>
                <div class="col-lg-6">
                    <label>تصویر:</label>
                    <input type="file" class="form-control" name="photo"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>رمز:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="رمز را وارد کنید."/>
                </div>
                <div class="col-lg-6">
                    <label>تکرار رمز:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="تکرار رمز را وارد کنید ."/>
                </div>
              </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-danger btn-block border-radius-xl fw-bold">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
</body>
<!--Body::end-->

</html>