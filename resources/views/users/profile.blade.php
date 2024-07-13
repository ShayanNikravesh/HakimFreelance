@extends('users.layouts.master')

@section('content')

<!--Main:start-->
<!--User Panel:start-->
<main class="mt-xxxx-large">
    <!--User Panel Wrapper:start-->
    <div class="user-panel-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
                    <!--User Panel Aside:start-->
                    @include('users.layouts.aside')
                    <!--User Panel Aside:end-->
                </div>

                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <!--User Panel Content:start-->
                    <div class="user-panel-content">
                        <!--User Panel Status:start-->
                        <div class="user-panel-status mb-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8 mb-3">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
                                </div>
                            </div>
                        </div>
                        <!--User Panel Status:end-->

                        <!--User Panel State:start-->
                        <div class="user-panel-state">
                            <div class="row">
                                <!--User Panel Info:start-->
                                <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                                </div>
                                <!--User Panel Info:end-->

                                <!--User Panel Plans:start-->
                                <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                                </div>
                                <!--User Panel Plans:end-->

                                <!--User Panel Default Address:start-->
                                <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                                </div>
                                <!--User Panel Default Address:end-->
                            </div>
                        </div>
                        <!-- User Panel State:end-->

                        <!--My Wish List:start-->
                        <div class="user-panel-wish-list mt-3">
                        </div>
                        <!--My Wish List:end-->
                    </div>
                    <!--User Panel Content:end-->
                </div>
            </div>
        </div>
    </div>
    <!--User Panel Wrapper:end-->
</main>
<!--User Panel:end-->
<!--Main:end-->

@endsection