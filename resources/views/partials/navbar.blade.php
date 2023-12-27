<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="{{ url('/') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item me-5" style="list-style: none">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">الصفحة الرئيسية</a>
                </li>

            </ul>

            <ul class="navbar-nav mx-auto">
                @auth
                    <li class="nav-item" style="list-style: none">
                        <a class="nav-link" href="{{ url('/admin/posts/create') }}"><i class="fa fa-plus fa-fw"></i>موضوع
                            جديد</a>
                    </li>
                @endauth

                <!-- Search Box -->
                <li style="list-style: none">
                    <form class="d-flex" method="post" action="{{ route('search') }}">
                        @csrf
                        <input class="form-control ms-2" name="keyword" type="search" placeholder="ابحث عن منشور..."
                            aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">ابحث</button>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <div class="topbar" style="z-index:1">
                    @auth
                        <!-- Nav Item - Alerts -->

                    @endauth
                </div>

                @guest
                    <li class="nav-item my-auto" style="list-style: none">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>

                    <li class="nav-item my-auto" style="list-style: none">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown justify-content-left my-auto" style="list-style: none">
                        <a id="navbarDropdown" class="nav-link" href="#" data-bs-toggle="dropdown">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </a>

                        <div class="dropdown-menu dropdown-menu-left px-2 text-right mt-2">
                            <div class="pt-4 pb-1 border-t border-gray-200">

                                <div class="mt-3 space-y-1">
                                    <!-- Account Management -->

                                    {{-- <a href="{{ url('/admin') }}" class="dropdown-item">لوحة الإدارة</a> --}}


                                    @can('admin')
                                    <a href="{{ url('/admin') }}" :active="request() - > url('/admin')">
                                        {{ __('لوحة الإدارة') }}
                                    </a>
                                    @endcan
                                    <br>
                                    <a href="{{ route('profile.show') }}" :active="request() - > routeIs('profile.show')">
                                        {{ __('الملف الشخصي') }}
                                    </a>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                          this.closest('form').submit();">
                                            {{ __('تسجيل خروج') }}
                                        </a>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
