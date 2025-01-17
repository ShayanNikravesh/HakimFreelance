@extends('panel.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست درخواست های کارگزاران</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه درخواست ثبت نام کارگزاران را مشاهده میکنید.</span>
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
					<h3 class="card-label font-weight">لیست کارگزاران</h3>
				</div>
			</div>
			<div class="card-body">
				<!--begin: Datatable-->
				<table class="table table-bordered table-hover table-checkable" id="datatable" style="margin-top: 13px !important">
					<thead>
						<tr>
                            <th>#</th>
                            <th>فرستنده</th>
                            <th>گیرنده</th>
                            <th>متن پیام</th>
                            <th>تاریخ</th>
                            <th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						@if ($messages)
							@foreach ($messages as $message)
                                @if($message->status === 'inactive')
								<tr>
                                    <td>{{++$loop->index}}</td>

                                    @if($message->sender === 'broker')
                                        <td>{{$message->broker()->first()->f_name . $message->broker()->first()->l_name}}</td>
                                        <td>{{ $message->user()->firstOrFail()->f_name . $message->user()->firstOrFail()->l_name }}</td>
                                    @else
                                        <td>{{ $message->user()->firstOrFail()->f_name . $message->user()->firstOrFail()->l_name }}</td>
                                        <td>{{$message->broker()->first()->f_name . $message->broker()->first()->l_name}}</td>
                                    @endif
                                    <td>{{$message->message_content}}</td>
                                    <td>{{$message->created_at}}</td>
										@switch($message->status)
											@case('active')
												<td>ارسال شده</td>
												@break
											@case('inactive')
												<td>در انتظار تایید</td>
												@break
											@case('banned')
												<td>حذف شده</td>
												@break
											@default
											<td>نا مشخص</td>
										@endswitch
									<td>
                                        <form action="{{route('message_val.update',[$message->id])}}" method="POST">
                                            @method('PUT')
                                            @csrf
										    <div class="d-flex">
                                                <input type="hidden" value="active" name="status">
                                                <button type="submit" href="" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="تایید ارسال">
											    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
												    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
												    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
											    </svg>
                                                </button>
                                            </div>
                                        </form>
                                            <form action="{{route('message_val.update',[$message->id])}}" method="POST">
												@method('PUT')
                                                @csrf
                                                <input type="hidden" value="banned" name="status">
                                                <button type="submit" class="btn-sm btn-danger btn mx-1" data-toggle="tooltip" data-placement="top" title="حذف پیام">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
														<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
														<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
													</svg>
												</button>
											</form>
										</div>
									</td>
								</tr>
                                @endif
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
