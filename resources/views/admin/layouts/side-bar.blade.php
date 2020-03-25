<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            @if (strpos(url()->current(), "admin"))
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        @if (strpos(url()->current(), "admin"))
                            <li class="active">
                                <a href="{{route('admin')}}">
                                <span class="pcoded-mtext">Inicio</span>
                            </a>
                            </li>
                        @else
                            <li class="">
                                <a href="{{route('admin')}}">
                                <span class="pcoded-mtext">Inicio</span>
                            </a>
                            </li>
                        @endif
                        @if (strpos(url()->current(), "admin/users"))
                            <li class="active">
                                <a href="{{route('users')}}">
                                    <span class="pcoded-mtext">Usuarios</span>
                                </a>
                            </li>
                        @else
                            <li class="">
                                <a href="{{route('users')}}">
                                    <span class="pcoded-mtext">Usuarios</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @else
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                        <a href="{{route('admin')}}">
                                <span class="pcoded-mtext">Inicio</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            @if (strpos(url()->current(), "admin/blogs"))
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Blog</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="active">
                            <a href="index-1.htm">
                                <span class="pcoded-mtext">posts</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-crm.htm">
                                <span class="pcoded-mtext">Nuevo post</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Blog</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="index-1.htm">
                                <span class="pcoded-mtext">posts</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-crm.htm">
                                <span class="pcoded-mtext">Nuevo post</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>

