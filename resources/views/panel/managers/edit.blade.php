@extends('panel.layouts.master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">ویرایش اطلاعات</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="font-weight-bold mr-4">در این صفحه می توانید اطلاعات خود را ویرایش کنید.</span>
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
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">مشخصات مدیر</h3>
                    </div>
                </div>
                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif --}}
                <div class="card-body">
                    <!--begin::Form-->
                    <div class="card card-custom">
                        <!--begin::Form-->
                        <form method="POST" action="{{route('managers.update','manager')}}">
                            @csrf
							@method('PUT')
                         <div class="card-body">
                          <div class="form-group row">
                            <div class="col-lg-6">
                                <label>نام:</label>
                                <input type="text" class="form-control" name="first_name" value="{{$manager->f_name}}"/>
                            </div>
                            <div class="col-lg-6">
                                <label>نام خانوادگی:</label>
                                <input type="text" class="form-control" name="last_name" value="{{$manager->l_name}}"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ایمیل:</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{$manager->email}}"/>
                            </div>
							<div class="col-lg-6">
                                <label for="exampleSelect1">سطح</label>
                                <select class="form-control form-control-solid" id="exampleSelect1" name="level">
                                    <option value="{{$manager->level}}">{{$manager->level}}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                                <label>رمز:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="رمز جدید را وارد کنید."/>
                            </div>
							<div class="col-lg-6">
                                <label>تکرار رمز:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="تکرار رمز جدید را وارد کنید ."/>
                            </div>
                          </div>
                         </div>
                         <div class="card-footer">
                          <button type="reset" class="btn btn-secondary">پاک کردن</button>
                          <button type="submit" class="btn btn-primary mr-2">ثبت</button>
                         </div>
                        </form>
                        <!--end::Form-->
                       </div>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
