@extends('users.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Compare:start-->
    <div class="compare">
        <!--Content:start-->
        <div class="compare-content mt-4">
            <div class="row">
                <!--Item:start-->
                @if (count($results) > 0)
                    @foreach ($results as $broker)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="compare-item">
                                <!--Broker Name:start-->
                                <div class="product-name p-3 border-bottom-gray-150">
                                    <span class="fw-lighter gray-500">نام:</span>
                                    <h5 class="fs-6 mt-2">
                                        <a href="" class="gray-900 fw-bold">{{$broker->f_name.' '.$broker->l_name}}</a>
                                    </h5>
                                </div>
                                <!--Broker Name:end-->

                                <!--Broker Image:start-->
                                <div class="product-image p-3 border-bottom-gray-150">
                                    <img src="{{asset($broker->photo)}}" alt="" class="img-fluid object-contain">
                                </div>
                                <!--Broker Image:end-->

                                <!--Product Add To Cart:start-->
                                <div class="p-3 d-grid gap-2">
                                    <a href="{{route('Broker.show',$broker->id)}}" class="btn btn-primary">مشاهده جزئیات</a>
                                </div>
                                <!--Product Add To Cart:end-->
                            </div>
                        </div>
                    @endforeach
                    @else
                        <p class="alert alert-danger">موردی یافت نشد.</p>
                @endif    
                <!--Item:end-->
            </div>
        </div>
        <!--Content:end-->
    </div>
    <!--Compare:end-->
</main>
<!--Main:end-->

@endsection