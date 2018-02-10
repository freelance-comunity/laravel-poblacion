<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title">
                <i class="fa fa-paw"></i>
                <span>SICAP</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenido(a),</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>GENERAL</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-home"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-university"></i> Planteles
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Tuxtla</a>
                            </li>
                            <li>
                                <a href="#">Cancún</a>
                            </li>
                            <li>
                                <a href="#">Tapachula</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>CONFIGURACIÓN</h3>
                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-laptop"></i> Gestión del sistema
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{url('admin/campus')}}">Planteles</a>
                            </li>
                            <li>
                                <a href="{{url('control/population')}}">Población estudiantil</a>
                            </li>
                            <li>
                                <a href="{{url('admin/user')}}">Usuarios</a>
                            </li>
                            <li>
                                <a href="#">Roles</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>