
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="fa" direction="rtl" dir="rtl" style="direction: rtl" >
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>پنل</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		{{-- <link rel="canonical" href="https://keenthemes.com/metronic" /> --}}
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('adminassets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<link href="{{asset('adminassets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('adminassets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('adminassets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('adminassets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('adminassets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('adminassets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('adminassets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('adminassets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->

		<link rel="shortcut icon" href="{{asset('adminassets/media/logos/favicon.ico')}}" />

		<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css')}}">

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

		<!--Sweet alert::start-->
		@include('sweetalert::alert')
		<!--Sweet alert::end-->

		<!--begin::Main-->

		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<!--end::Logo-->

			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->

				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_quick_user_mobile_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->

			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
					@include('panel.layouts.aside')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::User-->
								<div class="topbar-item">
									
									<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        @if(auth('managers')->check())
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3 btn">{{ auth('managers')->user()->f_name. ' ' .auth('managers')->user()->l_name }}</span>
                                        @else
                                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3 btn">{{ auth('brokers')->user()->f_name. ' ' .auth('brokers')->user()->l_name }}</span>
                                        @endif
									</div>
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
						@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>

		<!--end::Main-->

		<!-- begin::User Panel-->
			<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
				<!--begin::Header-->
				<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
					<h3 class="font-weight-bold m-0">پروفایل کاربر</h3>
					<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
						<i class="ki ki-close icon-xs text-muted"></i>
					</a>
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="offcanvas-content pr-5 mr-n5">
					<!--begin::Header-->
					<div class="d-flex align-items-center mt-5">
						<div class="symbol symbol-100 mr-5">
							<div class="symbol-label" style="background-image:url('{{asset('adminassets/media/users/default.jpg')}}')"></div>
							<i class="symbol-badge bg-success"></i>
						</div>
						<div class="d-flex flex-column">
							@if(auth('managers')->check())
							 <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth('managers')->user()->f_name. ' ' .auth('managers')->user()->l_name }}</a>
							 <div class="text-muted mt-1">مدیر</div>
							@else
								<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth('brokers')->user()->f_name. ' ' .auth('brokers')->user()->l_name }}</a>
								<div class="text-muted mt-1">کارگزار</div>
							@endif
							<div class="navi mt-2">
								<a href="#" class="navi-item">
									<span class="navi-link p-0 pb-2">
										<span class="navi-icon mr-1">
											<span class="svg-icon svg-icon-lg svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
														<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</span>
										@if(auth('managers')->check())
											 <span class="navi-text text-muted text-hover-primary">{{ auth('managers')->user()->email }}</span>
										@else
											<span class="navi-text text-muted text-hover-primary">{{ auth('brokers')->user()->email }}</span>
										@endif
									</span>
								</a>
								<a href="{{ route('logout') }}" class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5">خروج</a>
								@if(auth('managers')->check())
									<a href="{{ route('managers.edit','manager') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">ویرایش پروفایل</a>
								@else
									<a href="{{ route('broker.edit','broker') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">ویرایش پروفایل</a>
								@endif
							</div>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Separator-->
					<div class="separator separator-dashed mt-8 mb-5"></div>
					<!--end::Separator-->
					<!--begin::Nav-->
					<div class="navi navi-spacer-x-0 p-0">
					</div>
					<!--end::Nav-->
					<!--begin::Notifications-->
					<div>
						<!--begin:Heading-->
						<h5 class="mb-5">Recent Notifications</h5>
						<!--end:Heading-->
						<!--begin::Item-->
						{{-- <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
							<span class="svg-icon svg-icon-warning mr-5">
								<span class="svg-icon svg-icon-lg">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
											<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</span>
							<div class="d-flex flex-column flex-grow-1 mr-2">
								<a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
								<span class="text-muted font-size-sm">Due in 2 Days</span>
							</div>
							<span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
						</div> --}}
						<!--end::Item-->
					</div>
					<!--end::Notifications-->
				</div>
				<!--end::Content-->
			</div>
		<!-- end::User Panel-->

		<!--end::Demo Panel-->
		{{-- <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script> --}}
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--sweet alert-->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('adminassets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('adminassets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('adminassets/js/scripts.bundle.js')}}"></script>
		{{-- <script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script> --}}
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('adminassets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('adminassets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('adminassets/js/pages/widgets.js')}}"></script>
		<!--end::Page Scripts-->
		<script>
			$('#datatable').DataTable({
				responsive: true
			})
		</script>

	</body>
	<!--end::Body-->
</html>
