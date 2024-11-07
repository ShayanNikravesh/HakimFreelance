<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>حکیم فریلنس</title>
    <link rel="shortcut icon" href="{{asset('adminassets/media/logos/Hakim.ico')}}" />
    <!--Bootstrap 5 RTL-->
    <link rel="stylesheet" href="{{asset('userassets/css/vendors/bootstrap/bootstrap.rtl.css')}}">
    <!--Fontawesome 5-->
    <link rel="stylesheet" href="{{asset('userassets/css/vendors/fontawesome/fontawesome.min.css')}}">
    <!--SwiperJs Styles-->
    <link rel="stylesheet" href="{{asset('userassets/css/vendors/swiper/swiper-bundle.min.css')}}">
    <!--Main Styles-->
    <link rel="stylesheet" href="{{asset('userassets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css')}}">
    @yield('head')
</head>
<!--Head::end-->

<!--Body::start-->
<body>

<!--Sweet alert::start-->
@include('sweetalert::alert')
<!--Sweet alert::end-->

<!--Loader:start-->
<div class="loader mt-5">
    <div class="custom-navbar">
        <!--Navbar Mobile In Loader:start-->
        <div class="top-navbar">
            <!--Top Mobile Navbar In Mobile :start-->
            <div class="top-mobile-navbar py-1 border-bottom-gray-150">
                <!--Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--Top Mobile Navbar Right:start-->
                    <div class="top-mobile-navbar-right d-flex justify-content-between align-items-center">
                        <!--Humber Btn:start-->
                        <!--begin::Svg Icon-->
                        <svg class="blur-up" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                      fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon-->

                        <!--Humber Btn:end-->
                    </div>
                    <!--Top Mobile Navbar Right:end-->

                    <!--Top Mobile Navbar Middle:start-->
                    <div class="top-mobile-navbar-middle d-flex justify-content-between align-items-center">
                        <!--Logo:start-->
                        <a href="{{route('Users.index')}}" class="navbar-brand">
                            <img src="{{asset('adminassets/media/logos/HakimFreelance.png')}}" alt="لوگوی حکیم فریلنس" class="blur-up w-25">
                        </a>
                        <!--Logo:end-->
                    </div>
                    <!--Top Mobile Navbar Middle:end-->

                    <!--Top Mobile Navbar Left:start-->
                    <div class="top-mobile-navbar-left">
                        <!--begin::Svg Icon-->
                        <svg class="blur-up" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </div>
                    <!--Top Mobile Navbar Left:end-->
                </div>
                <!--Container:end-->
            </div>
            <!--Top Mobile Navbar In Mobile:end-->
        </div>
        <div class="main-navbar pt-1">
            <!--Main Mobile Navbar:start-->
            <div class="main-mobile-navbar py-2">
                <!--Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--Main Mobile Navbar Right:start-->
                    <div class="main-mobile-navbar-right">
                        <!--Search Form:start-->
                        <form action="{{route('search')}}" method="GET" class="position-relative">
                            <input name="search" class="form-control border-0 fs-6 fw-normal bg-gray-150 border-radius-xl py-2" type="text" placeholder="جستجو">
                            <button class="btn position-absolute" type="submit">
                                <i class="fab fa-sistrix gray-500 fw-md fs-5 blur-up"></i>
                            </button>
                        </form>
                        <!--Search Form:end-->
                    </div>
                    <!--Main Mobile Navbar Right:end-->

                    <!--Main Mobile Navbar Left:start-->
                    <div class="main-mobile-navbar-left">
                        <!-- Login and Register:start-->
                        <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                            <!--Navbar Item:start-->
                            <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                                <a class="mx-2 py-2 btn border-gray-300 border-radius-xl" href="javascript:;" title="">
                                    <!--begin::Svg Icon-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                    </svg>
                                    <!--end::Svg Icon-->
                                    ثبت نام
                                </a>

                                <!--Navbar Child Wrapper:start-->
                                <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2">
                                    <!--Navbar Item Child:start-->
                                    @if (!auth()->check())
                                        <li class="nav-item-submenu-child">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#insertNewUserModal" class="me-3 fs-7 fw" title="">
                                                <!--begin::Svg Icon -->
                                                <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                            transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                        <rect fill="#000000" opacity="0.3"
                                                            transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                            x="13" y="6" width="2" height="12" rx="1"/>
                                                        <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                                ثبت نام کاربر
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item-submenu-child">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#insertNewBrokerModal" class="me-3 fs-7" title="">
                                            <!--begin::Svg Icon -->
                                            <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                          fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                          transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                    <rect fill="#000000" opacity="0.3"
                                                          transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                          x="13" y="6" width="2" height="12" rx="1"/>
                                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                          fill="#000000" fill-rule="nonzero"
                                                          transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            ثبت نام کارگزار
                                        </a>
                                    </li>
                                    <!--Navbar Item Child:end-->
                                </ul>
                                <!--Navbar Child Wrapper:end-->
                            </li>
                            <!--Navbar Item:end-->
                        </ul>
                        <!--Login and Register:end-->
                    </div>
                    <!--Main Mobile Navbar Left:end-->
                </div>
                <!--Container:end-->
            </div>
            <!--Main Mobile Navbar:end-->
        </div>
        <!--Navbar Mobile In Loader:end-->

        <!--Top Navbar In Loader::start-->
        <div class="top-navbar navbar-expand-lg navbar-light py-2">
            <!--Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--Top Navbar Right:start-->
                <div class="top-nav-right d-flex justify-content-between align-items-center">
                    <!--Logo:start-->
                    <a href="{{route('Users.index')}}" class="navbar-brand">
                        <img src="{{asset('adminassets/media/logos/HakimFreelance.png')}}" alt="لوگوی حکیم فریلنس" class="blur-up w-25">
                    </a>
                    <!--Logo:end-->

                    <!--Search Form:start-->
                    <form action="{{route('search')}}" method="GET" class="position-relative">
                        <input class="form-control border-0 fs-6 fw-normal border-radius-xl bg-gray-150" name="search" type="text" placeholder="جستجو">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix fw-md fs-5 gray-500 blur-up"></i>
                        </button>
                    </form>
                    <!--Search Form:end-->

                </div>
                <!--Top Navbar Right:end-->

                <!--Top Navbar Left:start-->
                <div class="top-nav-left d-flex justify-content-between align-items-center">
                    <!--Login and Register:start-->
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                        <!--Navbar Item:start-->
                        <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                            <a class="mx-2 py-2 btn border-gray-300 border-radius-xl" href="javascript:;" title="">
                                <!--begin::Svg Icon-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                <!--end::Svg Icon-->
                                ثبت نام
                            </a>

                            <!--Navbar Child Wrapper:start-->
                            <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2">
                                <!--Navbar Item Child:start-->
                                @if (!auth()->check())
                                    <li class="nav-item-submenu-child">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#insertNewUserModal" class="me-3 fs-7 fw" title="">
                                            <!--begin::Svg Icon -->
                                            <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                        x="13" y="6" width="2" height="12" rx="1"/>
                                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            ثبت نام کاربر
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item-submenu-child">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#insertNewBrokerModal" class="me-3 fs-7" title="">
                                        <!--begin::Svg Icon -->
                                        <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                      fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                      transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                <rect fill="#000000" opacity="0.3"
                                                      transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                      x="13" y="6" width="2" height="12" rx="1"/>
                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                      fill="#000000" fill-rule="nonzero"
                                                      transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        ثبت نام کارگزار
                                    </a>
                                </li>
                                <!--Navbar Item Child:end-->
                            </ul>
                            <!--Navbar Child Wrapper:end-->
                        </li>
                        <!--Navbar Item:end-->
                    </ul>
                    <!--Login and Register:end-->
                </div>
                <!--Top Navbar Left:end-->
            </div>
            <!--Container:end-->
        </div>
        <!--Top Navbar In Loader::end-->
    </div>

    <!--    Header In Loader:start-->
    <header class="header"></header>
    <!--    Header In Loader:end-->

</div>
<!--Loader:end-->

<!--Navbar:start-->
<div class="custom-navbar" id="customNavbar">

    <!--Top Navbar::start-->
    <div class="top-navbar navbar-expand-lg navbar-light py-2">
        <!--Container:start-->
        <div class="container d-flex justify-content-between align-items-center">
            <!--Top Navbar Right:start-->
            <div class="top-nav-right d-flex justify-content-between align-items-center">
                <!--Logo:start-->
                <a href="{{route('Users.index')}}" class="navbar-brand" title="">
                    <img src="{{asset('adminassets/media/logos/HakimFreelance.png')}}" alt="لوگوی حکیم فریلنس" class="blur-up w-25">
                </a>
                <!--Logo:end-->

                <!--Search Form:start-->
                <div class="main-search position-relative">
                    <form action="{{route('search')}}" method="GET" class="position-relative">
                        <input class="form-control border-0 border-radius-xl bg-gray-150 fs-7" name="search" type="text" placeholder="جستجو" id="mainSearchInput">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix fw-md fs-5 gray-500"></i>
                        </button>
                    </form>
                    <div class="search-results custom-box-shadow-s-2">
                        <!--See All Results:start-->
                        <div class="search-result-item position-relative border-bottom p-3">
                            <div class="d-flex justify-content-between align-items-center ms-2 text-center">
                                <span class="d-inline-block fw-bold ms-1">مشاهده همه نتایج </span>
                                <i class="fa fa-arrow-left"></i>
                            </div>
                            <!--Search Link:start-->
                            <a href="search.html" class="stretched-link"></a>
                            <!--Search Link:end-->
                        </div>
                        <!--See All Results:end-->
                    </div>
                </div>
                <!--Search Form:end-->
            </div>
            <!--Top Navbar Right:end-->

            <!--Top Navbar Left:start-->
            <div class="top-nav-left d-flex justify-content-between align-items-center">
                @if (auth()->check())
                    <!--User Panel Menu:start-->
                    <div class="dropdown user-panel-menu">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown">
                            <!--begin::Svg Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                        fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item fw-bold py-3" href="javascript:;">
                                    <i class="fa fa-user-circle fs-3 align-middle gray-400 pe-1"></i>
                                    {{auth()->user()->f_name.' '.auth()->user()->l_name}}
                                    <i class="fa fa-angle-left ps-2 gray-500"></i>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-2 fw-bold" href="{{route('Users.show','User')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    پروفایل
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-2 fw-bold" href="{{route('Comments')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                                <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z"
                                                    fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                    نظرات
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-2 fw-bold" href="{{route('messages.index')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    پیغام ها
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-2 fw-bold" href="{{route('ideas.index')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    ایده ها
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-2 fw-bold" href="{{route('challenges')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    چالش ها
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item  py-3 fw-bold" href="{{route('logout', 'web')}}">
                                    <span class="pe-1">
                                        <!--begin::Svg Icon-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                    x="13" y="6" width="2" height="12" rx="1"/>
                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    خروج از حساب کاربری
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--User Panel Menu:end-->
                @else
                    <a href="{{route('Login')}}"class="btn me-3 border-gray-300 border-radius-xl fs-7" title="">
                        <!--begin::Svg Icon -->
                        <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                <rect fill="#000000" opacity="0.3"
                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                    x="13" y="6" width="2" height="12" rx="1"/>
                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                    fill="#000000" fill-rule="nonzero"
                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                        ورود
                    </a>
                @endif
            </div>
            <!--Top Navbar Left:end-->
        </div>
        <!--Container:end-->

        <!--Top Mobile Navbar In Mobile :start-->
        <div class="top-mobile-navbar border-bottom-gray-150" id="topMobileNavbar">
            <!--Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--Top Mobile Navbar Right:start-->
                <div class="top-mobile-navbar-right d-flex justify-content-between align-items-center">
                    <!--Humber Btn:start-->
                    <a href="javascript:;" class="navbar-brand openNavbarBtn" onclick="openNavbar()">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                      fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </a>
                    <!--Humber Btn:end-->

                    <!--Navbar Items:start-->
                    <div class="navbar-items-mobile">
                        <!--Navbar Items Mobile Header:start-->
                        <div class="navbar-items-mobile-header d-flex justify-content-between align-items-center border-bottom-gray-300 p-3">
                            <!--Navbar Items Mobile Title:start-->
                            <div class="navbar-items-mobile-title">
                                <h5 class="fw-bold">منو</h5>
                            </div>
                            <!--Navbar Items Mobile Title:end-->

                            <!--Navbar Items Mobile Close Button:start-->
                            <div class="navbar-items-mobile-close-btn" onclick="closeNavbar()">
                                <i class="fa fa-times fs-5"></i>
                            </div>
                            <!--Navbar Items Mobile Close Button:end-->
                        </div>
                        <!--Navbar Items Mobile Header:end-->

                        <!--Navbar Items Mobile Body:start-->
                        <div class="navbar-items-mobile-body p-3">
                            <ul class="navbar-parent">
                                <li class="cyan-500 fs-6">دسته بندی خدمات</li>
                                    @foreach ($parentTags as $parentTag)
                                    <li class="border-bottom-gray-150 px-2 py-3">
                                        <a href="javascript:;" class="fs-6 fw-bold d-block showSubMenu" onclick="openSubmenu({{$parentTag->id}})">
                                            <!--begin::Svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            {{$parentTag->name}}
                                            <i class="fa fa-angle-left float-end"></i>
                                        </a>
                                        <!--Navbar Items Child:start-->
                                        @php
                                            $Found = false;
                                        @endphp
                                        <ul class="first-child-parent p-3" id="{{$parentTag->id}}">
                                            <li class="fs-5 border-bottom-gray-300 pb-2 fw-bold text-center">
                                                {{$parentTag->name}}
                                            </li>
                                            <li class="py-3"><a href="javascript:;" class="cyan-500 fs-6 backToProductCategories" onclick="closeSubmenu({{$parentTag->id}})"><i class="fa fa-arrow-right me-2"></i>بازگشت به دسته بندی کالاها</a></li>
                                            @foreach ($tags as $tag)
                                            <!--Navbar Item Sub Child:start-->
                                            @if ($tag->parent_id == $parentTag->id)
                                                <li>
                                                    <a href="{{route('Tags.show',$tag->id)}}" class="fs-6 fw-bold d-block" title="">
                                                        {{$tag->name}}
                                                    </a>
                                                </li>
                                                @php
                                                    $Found = true;
                                                @endphp
                                            @endif
                                            <!--Navbar Item Sub Child:end-->
                                            @endforeach
                                            @if (!$Found)
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        زیر مجوعه ندارد.
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                        <!--Navbar Items Child:end-->
                                    </li>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <!--Navbar Items Mobile Body:end-->
                    </div>
                    <!--Navbar Items:end-->
                </div>
                <!--Top Mobile Navbar Right:end-->

                <!--Top Mobile Navbar Middle:start-->
                <div class="top-mobile-navbar-middle d-flex justify-content-between align-items-center">
                    <!--Logo:start-->
                    <a href="{{route('Users.index')}}" class="navbar-brand pb-2" title="">
                        <img src="{{asset('adminassets/media/logos/HakimFreelance.png')}}" alt="لوگوی حکیم فریلنس" class="blur-up w-25">
                    </a>
                    <!--Logo:end-->
                </div>
                <!--Top Mobile Navbar Middle:end-->
            </div>
            <!--Container:end-->
        </div>
        <!--Top Mobile Navbar In Mobile:end-->
    </div>
    <!--Top Navbar::end-->

    <!--Main Navbar::start-->
    <nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light custom-box-shadow-s-1-bottom py-1 w-100"
         id="mainNavbar">
        <!--Container:start-->
        <div class="container d-flex justify-content-between align-items-center">
            <!--Navbar Right:start-->
            <div class="navbar-right">
                <!--Navbar Wrapper:start-->
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="javascript:;" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px"
                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg><!--end::Svg Icon-->
                            دسته بندی خدمات
                        </a>

                        <!--Navbar Child Wrapper:start-->
                        <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2">
                            @foreach ($parentTags as $parentTag)
                            <!--Navbar Item Child:start-->
                            <li class="nav-item-submenu-child">
                                <a href="javascript:;" class="fw-bold" title="">
                                    <!--begin::Svg Icon-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                                    </svg>
                                    <!--end::Svg Icon-->
                                    {{$parentTag->name}}
                                    <i class="fa fa-angle-left float-end"></i>
                                </a>
                                @php
									$found = false;
								@endphp
                                <!--Navbar Item Sub Child Wrapper:start-->
                                <ul class="position-absolute top-0 bg-white custom-box-shadow-s-2">
                                    @foreach ($tags as $tag)
                                    <!--Navbar Item Sub Child:start-->
                                    @if ($tag->parent_id == $parentTag->id)
                                        <li>
                                            <a href="{{route('Tags.show',$tag->id)}}" title="">
                                                {{$tag->name}}
                                            </a>
                                        </li>
                                        @php
											$found = true;
										@endphp
                                    @endif
                                    <!--Navbar Item Sub Child:end-->
                                    @endforeach
                                    @if (!$found)
                                        <li>
                                            <a href="javascript:;" title="">
                                                زیر مجوعه ندارد.
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                                <!--Navbar Item Sub Child Wrapper:end-->
                            </li>
                            <!--Navbar Item Child:end-->
                            @endforeach
                        </ul>
                        <!--Navbar Child Wrapper:end-->
                        <!--Navbar Item:start-->
                        <span class="horizontal-line mx-1 me-2"></span>
                        <!--Navbar Item:end-->
                    </li>
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="{{route('guide')}}" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                            </svg>
                            راهنما
                        </a>
                    </li>
                    <!--Navbar Item:end-->
                </ul>
                <!--Navbar Wrapper:end-->
            </div>
            <!--Navbar Right:end-->

            <!--Navbar Left:start-->
            <div class="navbar-left">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2 btn border-gray-300 border-radius-xl" href="javascript:;" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!--end::Svg Icon-->
                            ثبت نام
                        </a>

                        <!--Navbar Child Wrapper:start-->
                        <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2">
                            <!--Navbar Item Child:start-->
                            @if (!auth()->check())
                                <li class="nav-item-submenu-child">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#insertNewUserModal" class="me-3 fs-7 fw" title="">
                                        <!--begin::Svg Icon -->
                                        <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                    x="13" y="6" width="2" height="12" rx="1"/>
                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        ثبت نام کاربر
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item-submenu-child">
                                <a href="" data-bs-toggle="modal" data-bs-target="#insertNewBrokerModal" class="me-3 fs-7" title="">
                                    <!--begin::Svg Icon -->
                                    <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                  fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                  transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                            <rect fill="#000000" opacity="0.3"
                                                  transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                  x="13" y="6" width="2" height="12" rx="1"/>
                                            <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                  fill="#000000" fill-rule="nonzero"
                                                  transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                    ثبت نام کارگزار
                                </a>
                            </li>
                            <!--Navbar Item Child:end-->
                        </ul>
                        <!--Navbar Child Wrapper:end-->
                    </li>
                    <!--Navbar Item:end-->
                </ul>
            </div>
            <!--Navbar Left:end-->
        </div>
        <!--Container:end-->

        <!--Main Mobile Navbar:start-->
        <div class="main-mobile-navbar pb-1">
            <!--Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--Main Mobile Navbar Right:start-->
                <div class="main-mobile-navbar-right">
                    <!--Search Form:start-->
                    <form action="{{route('search')}}" method="GET" class="position-relative">
                        <input name="search" class="form-control border-0 fs-6 fw-normal bg-gray-150 border-radius-xl py-2" type="text" placeholder="جستجو">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix text-light-gray fw-md fs-5"></i>
                        </button>
                    </form>
                    <!--Search Form:end-->
                </div>
                <!--Main Mobile Navbar Right:end-->

                <!--Main Mobile Navbar Left:start-->
                <div class="main-mobile-navbar-left">
                    <div class="dropdown user-panel-menu">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                            <!--begin::Svg Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                        fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </button>
                        <ul class="dropdown-menu">
                            @if (auth()->check())
                                <li>
                                    <a class="dropdown-item fw-bold" href="javascript:;">
                                        <i class="fa fa-user-circle fs-3 align-middle gray-400 pe-1"></i>
                                        {{auth()->user()->f_name.' '.auth()->user()->l_name}}
                                        <i class="fa fa-angle-left ps-2 gray-500"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold" href="{{route('Users.show','User')}}">
                                        <span class="pe-1">
                                            <!--begin::Svg Icon-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        پروفایل
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold" href="{{route('Comments')}}">
                                        <span class="pe-1">
                                            <!--begin::Svg Icon-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                                    <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z"
                                                        fill="#000000"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        نظرات
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item  py-2 fw-bold" href="{{route('messages.index')}}">
                                        <span class="pe-1">
                                            <!--begin::Svg Icon-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        پیغام ها
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold" href="{{ route('logout', 'web')}}">
                                        <span class="pe-1">
                                            <!--begin::Svg Icon-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                        x="13" y="6" width="2" height="12" rx="1"/>
                                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        خروج از حساب کاربری
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('Login')}}"class="dropdown-item fw-bold" title="">
                                        <!--begin::Svg Icon -->
                                        <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                    x="13" y="6" width="2" height="12" rx="1"/>
                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        ورود
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#insertNewUserModal" class="dropdown-item fw-bold" title="">
                                        <!--begin::Svg Icon -->
                                        <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                    x="13" y="6" width="2" height="12" rx="1"/>
                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        ثبت نام کاربر
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="" data-bs-toggle="modal" data-bs-target="#insertNewBrokerModal" class="dropdown-item fw-bold" title="">
                                    <!--begin::Svg Icon -->
                                    <svg class="rotate-3d me-2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                  fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                  transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                                            <rect fill="#000000" opacity="0.3"
                                                  transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                  x="13" y="6" width="2" height="12" rx="1"/>
                                            <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                  fill="#000000" fill-rule="nonzero"
                                                  transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                    ثبت نام کارگزار
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--User Panel Menu:end-->
                <!--Main Mobile Navbar Left:end-->
            </div>
            <!--Container:end-->
        </div>
        <!--Main Mobile Navbar:end-->
    </nav>
    <!--Main Navbar::end-->
</div>
<!--Navbar:end-->

<!-- Modal start-->

    <!-- broker register-->
    <div class="modal fade" id="insertNewBrokerModal">
{{--        @if ($errors->any())--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <div class="alert alert-danger">{{$error}}</div>--}}
{{--            @endforeach--}}
{{--        @endif--}}
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        ثبت نام
                        <span class="d-block fs-7 gray-600 fw-lighter mt-2">مشخصات خود را وارد کنید.</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Broker.store')}}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام</label>
                            <input type="text" name="f_name" class="form-control border-radius-xl" id="f_name" placeholder="نام خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام خانوادگی</label>
                            <input type="text" name="l_name" class="form-control border-radius-xl" id="l_name" placeholder="نام خانوادگی خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label fw-bold">شماره موبایل</label>
                            <input type="tel" name="mobile" class="form-control border-radius-xl" id="phoneNumber" placeholder="09xxxxxxxxx">
                        </div>
                        <div class="col-md-6">
                            <label for="gender" class="form-label fw-bold">انتخاب جنسیت</label>
                            <select name="gender" id="gender" class="wide border-radius-xl form-control">
                                <option selected>انتخاب کنید</option>
                                <option value="1">مرد</option>
                                <option value="2">زن</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nationalCode" class="form-label fw-bold">کد ملی</label>
                            <input name="national_code" type="text" class="form-control border-radius-xl" id="nationalCode" placeholder="کد ملی را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label fw-bold">عکس</label>
                            <input name="photo" type="file" class="form-control border-radius-xl" id="photo">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-bold">رمز</label>
                            <input name="password" type="password" class="form-control border-radius-xl" id="password" placeholder="رمز را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label fw-bold">نکرار رمز</label>
                            <input name="password_confirmation" type="password" class="form-control border-radius-xl" id="password_confirmation" placeholder="تکرار رمز را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="tag" class="form-label fw-bold">انتخاب دسته</label>
                            <select name="tag" id="tag" class="wide border-radius-xl form-control">
                                <option selected>انتخاب کنید</option>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="desc" class="form-label fw-bold">توضیحات</label>
                            <textarea name="desc" class="form-control border-radius-xl" id="desc" rows="2" placeholder="توضیحات را وارد کنید ..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label fw-bold">آدرس</label>
                            <textarea name="address" class="form-control border-radius-xl" id="address" rows="2" placeholder="آدرس را وارد کنید ..."></textarea>
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
    <!-- user register-->
    <div class="modal fade" id="insertNewUserModal">
{{--        @if ($errors->any())--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <div class="alert alert-danger">{{$error}}</div>--}}
{{--            @endforeach--}}
{{--        @endif--}}
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        ثبت نام
                        <span class="d-block fs-7 gray-600 fw-lighter mt-2">مشخصات خود را وارد کنید.</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Users.store')}}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام</label>
                            <input type="text" name="f_name" class="form-control border-radius-xl" id="f_name" placeholder="نام خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">نام خانوادگی</label>
                            <input type="text" name="l_name" class="form-control border-radius-xl" id="l_name" placeholder="نام خانوادگی خود را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label fw-bold">شماره موبایل</label>
                            <input type="tel" name="mobile" class="form-control border-radius-xl" id="phoneNumber" placeholder="09xxxxxxxxx">
                        </div>
                        <div class="col-md-6">
                            <label for="nationalCode" class="form-label fw-bold">کد ملی</label>
                            <input name="national_code" type="text" class="form-control border-radius-xl" id="nationalCode" placeholder="کد ملی را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-bold">رمز</label>
                            <input name="password" type="password" class="form-control border-radius-xl" id="password" placeholder="رمز را وارد کنید ...">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label fw-bold">نکرار رمز</label>
                            <input name="password_confirmation" type="password" class="form-control border-radius-xl" id="password_confirmation" placeholder="تکرار رمز را وارد کنید ...">
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

<!-- Modal end-->
<!-- content -->

    @yield('content')

<!-- end content -->

<!--Footer:start-->
<footer class="footer mt-5">
    <div class="container">
        <div class="footer-top mt-4 mb-5">
            <!--Footer Top Detail:start-->
            <div class="footer-top-detial d-flex justify-content-between align-items-center">
                <div class="">
                    <p class="mt-2 fs-7">تلفن پشتیبانی : 0000000</p>
                </div>
                <a href="#top" class="back-to-top border-radius-xl px-3 py-2 gray-600 fs-7">
                    برگشت به بالا
                    <i class="fa fa-angle-up ps-2"></i>
                </a>
            </div>
            <!--Footer Top Detail:end-->
        </div>
    </div>
    <div class="footer-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-3">
                    <h1 class="fw-bold fs-5">تیم برنامه نویسی:</h1>
                    <a class="btn" href="https://shayannikravesh.ir/">شایان نیک روش</a>
                    _
                    <a class="btn" href="https://pouria-azad.ir/">پوریا آزاد</a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3 d-flex justify-content-evenly align-items-center">
                    <img src="{{asset('userassets/img/symbol-01.png')}}" alt="" title="" class="img-fluid border border-gray-200 border-radius-xl">
                    <img src="{{asset('userassets/img/symbol-02.png')}}" alt="" title="" class="img-fluid border border-gray-200 border-radius-xl">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="footer-copyright text-center py-4">
        <div class="container">
            <p class="fs-8 gray-600">
                برای استفاده از مطالب برگشاپ، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز برای
                شرکت برگزیت است.
            </p>
        </div>
    </div> --}}
</footer>
<!--Footer:End-->


<!--Scroll To Top:start-->
<div class="to-top border-radius-circle text-center">
    <a href="javascript:;">
        <!--begin::Svg Icon-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
             viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"/>
                <path d="M8.2928955,10.2071068 C7.90237121,9.81658249 7.90237121,9.18341751 8.2928955,8.79289322 C8.6834198,8.40236893 9.31658478,8.40236893 9.70710907,8.79289322 L15.7071091,14.7928932 C16.085688,15.1714722 16.0989336,15.7810586 15.7371564,16.1757246 L10.2371564,22.1757246 C9.86396402,22.5828436 9.23139665,22.6103465 8.82427766,22.2371541 C8.41715867,21.8639617 8.38965574,21.2313944 8.76284815,20.8242754 L13.6158645,15.5300757 L8.2928955,10.2071068 Z"
                      fill="#000000" fill-rule="nonzero"
                      transform="translate(12.000003, 15.500003) scale(-1, 1) rotate(-90.000000) translate(-12.000003, -15.500003) "/>
                <path d="M6.70710678,12.2071104 C6.31658249,12.5976347 5.68341751,12.5976347 5.29289322,12.2071104 C4.90236893,11.8165861 4.90236893,11.1834211 5.29289322,10.7928968 L11.2928932,4.79289682 C11.6714722,4.41431789 12.2810586,4.40107226 12.6757246,4.76284946 L18.6757246,10.2628495 C19.0828436,10.6360419 19.1103465,11.2686092 18.7371541,11.6757282 C18.3639617,12.0828472 17.7313944,12.1103502 17.3242754,11.7371577 L12.0300757,6.88414142 L6.70710678,12.2071104 Z"
                      fill="#000000" fill-rule="nonzero" opacity="0.3"
                      transform="translate(12.000003, 8.500003) scale(-1, 1) rotate(-360.000000) translate(-12.000003, -8.500003) "/>
            </g>
        </svg><!--end::Svg Icon-->
    </a>

</div>
<!--Scroll To Top:end-->

<!--Overlay:start-->
<div class="overlay"></div>
<!--Overlay:end-->

@yield('style')

@if (isset($errors) and $errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'خطا',
                html: `
                    <ul>
                        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                        @endforeach
                </ul>
`
            });
        });
    </script>
@endif

<!--sub menu:start-->
<script>

    function openNavbar() {
        var subMenu = document.querySelector(".navbar-items-mobile");
        subMenu.classList.add("showElem");
    }

    function closeNavbar() {
    var subMenu = document.querySelector(".navbar-items-mobile");
    subMenu.classList.remove("showElem");
    }

    function openSubmenu(elementId) {
        var subMenu = document.getElementById(elementId);
        subMenu.classList.add("showElem");
    }

    function closeSubmenu(elementId) {
        var subMenu = document.getElementById(elementId);
        subMenu.classList.remove("showElem");
    }

</script>
@yield('script')
<!--sub menu:end-->

<!--sweet alert-->
{{--<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script src="{{ asset('adminassets/js/pages/features/miscellaneous/sweetalert2.js') }}"></script>
<!--Main Script::start-->
<script src="{{asset('userassets/js/main.js')}}"></script>
<!--Main Script::end-->

<!--BootstrapJS:start-->
<script src="{{asset('userassets/js/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!--BootstrapJS:end-->

<!--SwiperJS:start-->
<script src="{{asset('userassets/js/vendors/swiper/swiper-bundle.min.js')}}"></script>
<!--SwiperJS:end-->

<!--Index JS:start Only for this page-->
<script src="{{asset('userassets/js/index.js')}}"></script>
<!--Index JS:end Only for this page-->
</body>
<!--Body::end-->

</html>
