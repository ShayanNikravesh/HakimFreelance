@extends('panel.layouts.master')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست نظرات</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <span class="font-weight-bold mr-4">در این صفحه لیست نظرات مربوط به کارگزار را مشاهده میکنید.</span>
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
                    <h3 class="card-label font-weight">لیست نظرات</h3>
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
                        <th>تاریخ</th>
                        <th>عملیات</th>

                        {{-- <th>عملیات</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                    @if ($users)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{++$loop->index}}</td>
                                <td>{{$user->f_name}}</td>
                                <td>{{$user->l_name}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('messagess.show', $user->id) }}" class="btn-sm btn-success btn mx-1" data-toggle="tooltip" data-placement="top" title="مشاهده چت ها">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                            </svg>
                                        </a>
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
