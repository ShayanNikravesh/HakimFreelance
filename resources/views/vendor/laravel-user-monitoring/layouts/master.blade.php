@extends('panel.layouts.master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="sm:px-6 w-full">
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800" tabindex="0">
                    نظارت کاربران 📈
                </p>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="sm:flex items-center justify-between">
                <div class="flex items-center">
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800"
                       href="{{ route('user-monitoring.visits-monitoring') }}">
                        <div class="py-2 px-8 text-indigo-700 rounded-full hover:text-indigo-700 hover:bg-indigo-100
                                    {{ request()->routeIs('user-monitoring.visits-monitoring') ? 'bg-indigo-100' : '' }}">
                            <p>Visit Monitoring</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                       href="{{ route('user-monitoring.actions-monitoring') }}">
                        <div class="py-2 px-8 text-indigo-700 rounded-full hover:text-indigo-700 hover:bg-indigo-100
                                    {{ request()->routeIs('user-monitoring.actions-monitoring') ? 'bg-indigo-100' : '' }}">
                            <p>Action Monitoring</p>
                        </div>
                    </a>
                    @foreach (array_keys(config('user-monitoring.guards')) as $guards_name)
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                           href="{{ route('user-monitoring'. '.' . $guards_name. '.'  .'authentications-monitoring') }}">
                            <div class="py-2 px-8 text-indigo-700 rounded-full hover:text-indigo-700 hover:bg-indigo-100
                                    {{ request()->routeIs('user-monitoring.' . $guards_name . '.authentications-monitoring') ? 'bg-indigo-100' : '' }}">
                                <p>Authentication Monitoring / {{ $guards_name }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>

            @yield('content2')
        </div>
    </div>
</div>
@endsection


