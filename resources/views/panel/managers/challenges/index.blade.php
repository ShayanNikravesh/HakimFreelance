@extends('panel.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست چالش ها</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه لیست چالش ها را مشاهده میکنید.</span>
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
					<h3 class="card-label font-weight">لیست چالش ها</h3>
				</div>
			</div>
			<div class="card-body">
				<!--begin: Datatable-->
				<table class="table table-bordered table-hover table-checkable" id="datatable" style="margin-top: 13px !important">
					<thead>
						<tr>
							<th>#</th>
							<th>کاربر</th>
							<th>عنوان</th>
							<th>توضیحات</th>
							<th>وضعیت</th>
							<th>فایل ها</th>
							<th>تعیین وضعیت</th>
						</tr>
					</thead>
					<tbody>
						@if ($challenges)
							@foreach ($challenges as $challenge)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$challenge->user->f_name.' '.$challenge->user->l_name}}</td>
									<td>{{$challenge->title}}</td>
									<td>{{$challenge->desc}}</td>
									@switch($challenge->status)
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
									@if (count($challenge->challengeFile))
										<td>
											<button type="button" class="btn-sm btn-primary btn mx-1" data-toggle="modal" data-target="#Modal{{$challenge->id}}file">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
													<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
												</svg>
											</button>
										</td>
									@else
										<td>#</td>
									@endif
									<td>
										<button type="button" class="btn-sm btn-primary btn mx-1" data-toggle="modal" data-target="#Modal{{$challenge->id}}">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
												<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
											</svg>
										</button>
									</td>
								</tr>
								<div class="modal fade" id="Modal{{$challenge->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">وضعیت چالش را تعیین کنید.</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body text-center">
											<a href="{{route('change-status-challenge',[$challenge->id,'status'=>'accept'])}}" class="btn btn-success btn-sm">تایید</a>
											<a href="{{route('change-status-challenge',[$challenge->id,'status'=>'reject'])}}" class="btn btn-danger btn-sm">عدم تایید</a>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
										</div>
									</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="Modal{{$challenge->id}}file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">فایل ها</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body text-center">
											@foreach ($challenge->challengeFile as $key=>$file )
                                                <a class="btn btn-primary mb-2" href="{{asset($file->file)}}">فایل {{$key+1}}</a>
                                            @endforeach
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
