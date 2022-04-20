<!-- Header -->
<header class="ec-main-header" id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle"></button>
        <!-- search form -->
        <div class="search-form d-lg-inline-block">
            <div class="input-group">
                <input type="hidden" name="query" id="search-input" class="form-control" placeholder="search.." autofocus
                    autocomplete="off" />
                <button type="hidden" name="search" id="search-btn" class="btn btn-flat">
                    {{-- <i class="mdi mdi-magnify"></i> --}}
                </button>
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div>
        </div>

        <!-- navbar right -->
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/user/user.jpg ') }}" class="user-image" alt="User Image" />
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <img src="{{ asset('assets/img/user/user.jpg ') }}" class="img-circle"
                                alt="User Image" />
                            <div class="d-inline-block">
                                {{ Auth::user()->name }} <small
                                    class="pt-1">{{ Auth::user()->email }}</small>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('admin.profile')}}">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#">
                                <i class="mdi mdi-email"></i> Message
                            </a>
                        </li> --}}
                        <li class="dropdown-footer">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                                    class="mdi mdi-logout"></i> {{ __('Logout') }} </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
