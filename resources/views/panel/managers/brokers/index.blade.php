@extends('panel.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست کارگزاران</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه لیست کارگزاران را مشاهده میکنید.</span>
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
					<h3 class="card-label font-weight">لیست کارگزاران</h3>
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
							<th>ایمیل</th>
							<th>توضیحات</th>
							<th>دسنه</th>
							<th>وضعیت</th>
							<th>آدرس</th>
							<th>عکس</th>
							<th>تغییر وضعیت</th>
						</tr>
					</thead>
					<tbody>
						@if ($brokers)
							@foreach ($brokers as $broker)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$broker->first_name}}</td>
									<td>{{$broker->last_name}}</td>
									<td>{{$broker->email}}</td>
									<td>{{$broker->description}}</td>
									<td>دسته</td>
										@switch($broker->status)
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
									<td>{{$broker->address}}</td>
									<td>{{$broker->image}}</td>
									<td>
										<button type="button" class="btn-sm btn-primary btn mx-1" data-toggle="modal" data-target="#ModalCenter">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
												<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
											</svg>
										</button>
									</td>
								</tr>
								<!-- Modal -->
								<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">وضعیت کارگزار را تعیین کنید.</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body text-center">
											<a href="{{route('change-status-broker',[$broker->id,'status'=>'active'])}}" class="btn btn-success btn-sm">فعال</a>
											<a href="{{route('change-status-broker',[$broker->id,'status'=>'inactive'])}}" class="btn btn-warning btn-sm">غیر فعال</a>
											<a href="{{route('change-status-broker',[$broker->id,'status'=>'banned'])}}" class="btn btn-danger btn-sm">مسدود شده</a>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
										</div>
									</div>
									</div>
								</div>
								<!-- Modal end -->
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
