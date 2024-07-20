@extends('panel.layouts.master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">ارسال پیام</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="font-weight-bold mr-4">در این صفحه می توانید به پیام های کاربر پاسخ دهید.</span>
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
                        <h3 class="card-label">ارسال پیام به فلانی</h3>
                    </div>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="card-body">
                    @foreach($messages as $message)
                        @if($message->sender === 'broker')
                            <div class="d-flex justify-content-start mb-4">
                                <div class="bg-success p-1 rounded">
                                    {{ $message->message_content }}
                                    <span class="text-light font-size-base mr-2"><?php echo verta($message->created_at);?></span>
                                </div>
                            </div>
                        @elseif($message->status === 'active')
                            <div class="d-flex justify-content-end mb-4">
                                <div class="bg-warning p-1 rounded">
                                    {{ $message->message_content }}
                                    <span class="text-light font-size-base mr-2"><?php echo verta($message->created_at);?></span>
                                </div>
                            </div>
                        @endif
                    @endforeach    
                </div>
                <div class="card-footer">
                    <form action="{{ route('messagess.store')}}" method="POST">
                    @csrf
                        <div class="input-group">
                            <input type="hidden" value="{{ $user_id }}" name="user_id">
                            <input name="message_content" class="form-control type_msg" placeholder="پیامتان را بنویسید..."></input>
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-location-arrow"></i></button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

