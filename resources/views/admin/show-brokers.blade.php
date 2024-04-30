@extends('admin.layouts.master')

@section('content')

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
        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
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
                </tr>
            </thead>
            <tbody>
                @if ($brokers)
                    @foreach ($brokers as $broker)
                        <tr>
                            <td>1</td>
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
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>

@endsection