<aside class="user-panel-aside border border-radius-xl py-3">
    <!--User Panel Header:start-->
    <div class="user-panel-aside-header text-center border-bottom-gray-200 pb-2">
        <!--User Picture:start-->
        <i class="fa fa-user-circle cfs-1 gray-300"></i>
        <!--User Picture:end-->

        <!--User Name:start-->
        <p class="fw-bold mt-2">
            {{auth()->user()->f_name.' '.auth()->user()->l_name}}
            <a href="{{route('Users.edit','User')}}" class="ps-2">
                <i class="fa fa-pen cyan-300 fa-md"></i>
            </a>
        </p>
        <p class="gray-500">{{auth()->user()->mobile}}</p>
        <!--User Name:end-->
    </div>
    <!--User Panel Header:end-->

    <!--User Panel Aside Menu:start-->
    <div class="user-panel-aside-menu">
        <ul>
            <li>
                <a href="{{route('Comments')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                    </svg>
                    <span class="ps-2">
                        نظرات
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('messages.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                    </svg>
                    <span class="ps-2">
                        پیغام ها
                    </span>
                </a>
            </li>
            {{-- <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <span class="ps-2">
                        اطلاعات حساب کاربری
                    </span>
                </a>
            </li> --}}
            <li>
                <a href="{{route('Exit')}}">
                    <i class="fa fa-sign-out-alt"></i>
                    <span class="ps-2">
                        خروج
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!--User Panel Aside Menu:end-->
</aside>
