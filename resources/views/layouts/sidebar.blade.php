<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-dark"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="">
            <img src="{{ asset('assets/img/logos/broker vision-fin-02.png') }}" class="navbar-brand-img" alt="main_logo"
                 style="min-height: 50px;">
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{-- ||| Admin Dashboard ||| --}}
            @if(auth()->user()->type == 1)
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                       aria-controls="ProfileNav"
                       role="button" aria-expanded="false">
                        <img src="{{ auth()->user()->getUserPic() ?? '' }}" class="avatar loginUserProfile">
                        <span
                            class="nav-link-text ms-2 ps-1">{{ auth()->user()->first_name ?? ''}} {{ auth()->user()->last_name ?? '' }}</span>
                    </a>
                    <div class="collapse" id="ProfileNav">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="{{ route('admin.settings.index') }}"
                                   class="nav-link text-white {{ Request::is('admin/setting') ? 'active' : '' }}">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="nav-link-text ms-3 ps-1">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link text-white logOutBtn " href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); this.closest('form').submit();">
                                        <span class="sidenav-mini-icon"> L </span>
                                        <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <hr class="horizontal light mt-0">
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link text-white {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                       class="nav-link text-white {{ Request::is('admin/users') ? 'active' : '' }}">
                        <i class="fa fa-users"></i>
                        <span class="nav-link-text ms-2 ps-1">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.artist.index') }}"
                       class="nav-link text-white {{ Request::is('admin/artist') ? 'active' : '' }}">
                        <i class="fa fa-eye"></i>
                        <span class="nav-link-text ms-2 ps-1">Artist</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.top.picks.index') }}"
                       class="nav-link text-white {{ Request::is('admin/top/picks') ? 'active' : '' }}">
                        <i class="fa fa-tasks"></i>
                        <span class="nav-link-text ms-2 ps-1">Top Picks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}"
                       class="nav-link text-white {{ Request::is('admin/settings') ? 'active' : '' }}">
                        <i class="ni ni-settings text-white"></i>
                        <span class="nav-link-text ms-2 ps-1">Settings</span>
                    </a>
                </li>

            {{-- ||| User Dashboard ||| --}}
            @elseif(auth()->user()->type == 2)
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                       aria-controls="ProfileNav"
                       role="button" aria-expanded="false">
                        <img src="{{ auth()->user()->getUserPic() ?? '' }}" class="avatar loginUserProfile">
                        <span
                            class="nav-link-text ms-2 ps-1">{{ auth()->user()->first_name ?? ''}} {{ auth()->user()->last_name ?? '' }}</span>
                    </a>
                    <div class="collapse" id="ProfileNav">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="{{ route('user.settings.index') }}"
                                   class="nav-link text-white {{ Request::is('user/settings') ? 'active' : '' }}">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="nav-link-text ms-3 ps-1">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link text-white logOutBtn " href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); this.closest('form').submit();">
                                        <span class="sidenav-mini-icon"> L </span>
                                        <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <hr class="horizontal light mt-0">
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.dashboard') }}"
                       class="nav-link text-white {{ Request::is('user') ? 'active' : '' }}">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.tracking.index') }}"
                       class="nav-link text-white {{ Request::is('user/tracking') ? 'active' : '' }}">
                        <i class="fa fa-eye"></i>
                        <span class="nav-link-text ms-2 ps-1">Tracking</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.top.picks.index') }}"
                       class="nav-link text-white {{ Request::is('user/top/picks') ? 'active' : '' }}">
                        <i class="fa fa-tasks"></i>
                        <span class="nav-link-text ms-2 ps-1">Top Picks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.settings.index') }}"
                       class="nav-link text-white {{ Request::is('user/settings') ? 'active' : '' }}">
                        <i class="ni ni-settings text-white"></i>
                        <span class="nav-link-text ms-2 ps-1">Settings</span>
                    </a>
                </li>

            @else

            @endif
        </ul>
    </div>
</aside>
