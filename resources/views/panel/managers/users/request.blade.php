@extends('panel.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست درخواست های کاربران</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه درخواست ثبت نام کاربران را مشاهده میکنید.</span>
					<!--end::Actions-->
				</div>
				<!--end::Info-->
				<!--begin::Toolbar-->
				<div class="d-flex align-items-center">
					<!--begin::Actions-->
					<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
					<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
					<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
					<!--end::Actions-->
					<!--begin::Daterange-->
					<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
						<span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
						<span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
					</a>
					<!--end::Daterange-->
					<!--begin::Dropdowns-->
					<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
						<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="svg-icon svg-icon-success svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</a>
						<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
							<!--begin::Navigation-->
							<ul class="navi navi-hover py-5">
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-drop"></i>
										</span>
										<span class="navi-text">New Group</span>
									</a>
								</li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-list-3"></i>
										</span>
										<span class="navi-text">Contacts</span>
									</a>
								</li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-rocket-1"></i>
										</span>
										<span class="navi-text">Groups</span>
										<span class="navi-link-badge">
											<span class="label label-light-primary label-inline font-weight-bold">new</span>
										</span>
									</a>
								</li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-bell-2"></i>
										</span>
										<span class="navi-text">Calls</span>
									</a>
								</li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-gear"></i>
										</span>
										<span class="navi-text">Settings</span>
									</a>
								</li>
								<li class="navi-separator my-3"></li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-magnifier-tool"></i>
										</span>
										<span class="navi-text">Help</span>
									</a>
								</li>
								<li class="navi-item">
									<a href="#" class="navi-link">
										<span class="navi-icon">
											<i class="flaticon2-bell-2"></i>
										</span>
										<span class="navi-text">Privacy</span>
										<span class="navi-link-badge">
											<span class="label label-light-danger label-rounded font-weight-bold">5</span>
										</span>
									</a>
								</li>
							</ul>
							<!--end::Navigation-->
						</div>
					</div>
					<!--end::Dropdowns-->
				</div>
				<!--end::Toolbar-->
			</div>
		</div>
		<!--end::Subheader-->
		<!--begin::Entry-->
		<!--begin::Container-->
		<div class="card card-custom">
			<div class="card-header">
				<div class="card-title">
					<span class="card-icon">
						<i class="flaticon2-favourite text-primary"></i>
					</span>
					<h3 class="card-label font-weight">لیست کاربران</h3>
				</div>
			</div>
			<div class="card-body">
				<!--begin: Datatable-->
				<table class="table table-bordered table-hover table-checkable" id="datatable" style="margin-top: 13px !important">
					<thead>
						<tr>
							<th>#</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<th>موبایل</th>
							<th>وضعیت</th>
							<th>کد ملی</th>
							<th>تغییر وضعیت</th>
						</tr>
					</thead>
					<tbody>
						@if ($users)
							@foreach ($users as $user)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$user->f_name}}</td>
									<td>{{$user->l_name}}</td>
									{{-- <td>{{$user->national_code}}</td> --}}
									<td>{{$user->mobile}}</td>
										@switch($user->status)
											@case('active')
												<td>فعال</td>
												@break
											@case('inactive')
												<td>غیر فعال</td>
												@break
											@case('banned')
												<td>مسدود شده</td>
												@break
											@default
											<td>نا مشخص</td>
										@endswitch
									<td>{{$user->national_code}}</td>
									<td>
										<div class="d-flex">
											<a href="{{route('change-status-user',[$user->id,'status'=>'active'])}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="پذیرش درخواست">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
												<path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
											</svg>
											</a>
											<form action="{{route('users.destroy',$user->id)}}" method="POST">
												@csrf
												@method('DELETE')
												<button class="btn-sm btn-danger btn mx-1" data-toggle="tooltip" data-placement="top" title="حذف درخواست">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
														<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
														<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
													</svg>
												</button>
											</form>
										</div>	
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
				<!--end: Datatable-->
			</div>
		</div>
		<!--end::Container-->
	</div>
    <!--end::Entry-->
@endsection
