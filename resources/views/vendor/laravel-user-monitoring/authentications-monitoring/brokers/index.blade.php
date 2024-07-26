@extends('panel.layouts.master')

@php
    $index = -1;
    $url = url()->current();
    $type = '';
    $segments = explode('/', $url);
    foreach (array_keys(config('user-monitoring.guards')) as $key => $value) {
        if (($value === $segments[count($segments)-2])) {
            $index = $key;
            $type = config('user-monitoring.guards')[$value];
            break;
        }
    }
@endphp

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="sm:px-6 w-full">
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800" tabindex="0">
                    فعالیت ها
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
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                       href="{{ route('user-monitoring'. '.' . array_keys(config('user-monitoring.guards'))[0]. '.'  .'authentications-monitoring') }}">
                        <div class="py-2 px-8 text-indigo-700 rounded-full hover:text-indigo-700 hover:bg-indigo-100
                                {{ request()->routeIs('user-monitoring.authentications-monitoring') ? 'bg-indigo-100' : '' }}">
                            <p>Authentication Monitoring</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://github.com/binafy/laravel-user-monitoring"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0
                                    inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600
                                    focus:outline-none rounded items-center">
                        <p class="text-sm fo    nt-medium leading-none text-white mr-2">
                            Github
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill:#FFFFFF;">
                            <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                        @foreach ($authentications as $authentication)
                            @if ($authentication->consumer instanceof $type)
                                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                    <td class="pl-24">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{ $authentication->consumer ? $authentication->consumer->f_name.''.$authentication->consumer->l_name :'Guest User' }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                                            </svg>
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{ $authentication->action_type }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                            </svg>
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{ $authentication->ip }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                                                <path d="M 46 4.867188 L 4 10.117188 L 4 39.882813 L 46 45.132813 Z M 44 7.132813 L 44 24 L 25 24 L 25 9.507813 Z M 23 9.757813 L 23 24 L 6 24 L 6 11.882813 Z M 6 26 L 23 26 L 23 40.242188 L 6 38.117188 Z M 25 26 L 44 26 L 44 42.867188 L 25 40.492188 Z"></path>
                                            </svg>
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{ $authentication->platform }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <button class="py-3 px-3 text-sm focus:outline-none leading-none text-blue-700 bg-blue-100 rounded">
                                            {{ $authentication->created_at->format('Y-m-d H:i') }}
                                        </button>
                                    </td>
                                    <td class="pl-4">
                                        <form method="post" action="{{ route('user-monitoring.managers.authentications-monitoring-delete', $authentication->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="brokers" name="type">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-red-600 py-3 px-5 bg-red-100 rounded hover:bg-red-200 focus:outline-none" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $authentications->links() }}
            </div>
        </div>    
    </div>
</div>
@yield('js')
@endsection


