@extends('panel.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست ایده ها</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه لیست ایده ها را مشاهده میکنید.</span>
					<!--end::Actions-->
				</div>
				<!--end::Info-->
				<!--begin::Toolbar-->
				<div class="d-flex align-items-center">
					<!--begin::Daterange-->
						<span class="text-muted font-size-base font-weight-bold mr-2">تاریخ:</span>
						<span class="text-primary font-size-base font-weight-bolder"><?php echo verta()->format('Y.m.d');?></span>
					<!--end::Daterange-->
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
							<th>وضعیت</th>
							<th>تغییر وضعیت</th>
						</tr>
					</thead>
					<tbody>
						@if ($ideas)
							@foreach ($ideas as $idea)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$idea->user->f_name}}</td>
									<td>{{$idea->user->l_name}}</td>
										@switch($idea->status)
											@case('accept')
												<td>تایید شده</td>
												@break
											@case('reject')
												<td>تایید نشده</td>
												@break
											@case('waiting')
												<td>در انتظار</td>
												@break
											@default
											<td>نا مشخص</td>
										@endswitch
										@switch($idea->status)
											@case('accept')
												<td>
													<a href="{{route('change-status-idea',[$idea->id,'status'=>'reject'])}}" class="btn btn-danger btn-sm">عدم تایید</a>
												</td>
												@break
											@case('reject')
												<td>
													<a href="{{route('change-status-idea',[$idea->id,'status'=>'accept'])}}" class="btn btn-success btn-sm">تایید</a>
												</td>
												@break
											@case('waiting')
												<td>
													<a href="{{route('change-status-idea',[$idea->id,'status'=>'accept'])}}" class="btn btn-success btn-sm">تایید</a>
													<a href="{{route('change-status-idea',[$idea->id,'status'=>'reject'])}}" class="btn btn-danger btn-sm">عدم تایید</a>
												</td>
												@break
											@default
											<td>نا مشخص</td>
										@endswitch
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
