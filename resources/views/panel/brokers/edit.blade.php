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
                        <h3 class="card-label">مشخصات کارگزار</h3>
                    </div>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="card-body">
                    <!--begin::Form-->
                    <div class="card card-custom">
                        <!--begin::Form-->
                        <form method="POST" action="{{route('broker.update','broker')}}">
								@csrf
								@method('PUT')
							<div class="card-body">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>نام:</label>
										<input type="text" class="form-control" name="first_name" value="{{$broker->f_name}}"/>
									</div>
									<div class="col-lg-6">
										<label>نام خانوادگی:</label>
										<input type="text" class="form-control" name="last_name" value="{{$broker->l_name}}"/>
									</div>
									<div class="col-md-6">
										<label for="phoneNumber" class="form-label fw-bold">شماره موبایل:</label>
										<input type="tel" name="mobile" class="form-control border-radius-xl" id="phoneNumber" placeholder="09xxxxxxxxx" value="{{$broker->mobile}}">
									</div>
									<div class="col-md-6">
										<label for="gender" class="form-label fw-bold">انتخاب جنسیت:</label>
										<select name="gender" id="gender" class="wide border-radius-xl form-control">
											<option selected value="{{$broker->gender}}"></option>
											<option value="1">مرد</option>
											<option value="2">زن</option>
										</select>
									</div>
									<div class="col-md-6">
										<label for="nationalCode" class="form-label fw-bold">کد ملی:</label>
										<input name="national_code" type="text" class="form-control border-radius-xl" id="nationalCode" placeholder="کد ملی را وارد کنید ...">
									</div>
									<div class="col-md-6">
										<label for="photo" class="form-label fw-bold">عکس:</label>
										<input name="photo" type="file" class="form-control border-radius-xl" id="photo">
									</div>
									<div class="col-md-6">
										<label for="password" class="form-label fw-bold">رمز:</label>
										<input name="password" type="password" class="form-control border-radius-xl" id="password" placeholder="رمز را وارد کنید ...">
									</div>
									<div class="col-md-6">
										<label for="password_confirmation" class="form-label fw-bold">نکرار رمز:</label>
										<input name="password_confirmation" type="password" class="form-control border-radius-xl" id="password_confirmation" placeholder="تکرار رمز را وارد کنید ...">
									</div>
									<div class="col-md-6">
										<label for="tag" class="form-label fw-bold">انتخاب دسته:</label>
										<select name="tag" id="tag" class="wide border-radius-xl form-control">
											<option selected>انتخاب کنید</option>
											@foreach ($tags as $tag)
												<option value="{{$tag->id}}">{{$tag->name}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-6">
										<label for="desc" class="form-label fw-bold">توضیحات:</label>
										<textarea name="desc" class="form-control border-radius-xl" id="desc" rows="2" placeholder="توضیحات را وارد کنید ..."></textarea>
									</div>
									<div class="col-md-12">
										<label for="address" class="form-label fw-bold">آدرس:</label>
										<textarea name="address" class="form-control border-radius-xl" id="address" rows="2" placeholder="آدرس را وارد کنید ..."></textarea>
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
