<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="./index.html">
            <img src="{{ asset('dist_argon/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
                    aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="{{ asset('dist_argon/examples/profile.html') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="{{ asset('dist_argon/dist_argon/examples/profile.html') }}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="{{ asset('dist_argon/examples/profile.html') }}" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="{{ asset('dist_argon/examples/profile.html') }} " class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="./index.html">
                            <img src="{{ asset('dist_argon/assets/img/brand/blue.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a class="nav-link  {{ Route::is('dashboard') ? 'active' : '' }} " href="{{ route('dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i> Inicio
                    </a>
                </li>

                @hasrole('Admin')
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('schedule') ? 'active' : '' }} " href="{{ url('schedule') }}">
                            <i class="fa fa-clock menu-icon text-blue"></i>
                            <span class="menu-title">Horario</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('users') ? 'active' : '' }} " href="{{ route('users') }}">
                            <i class="fa fa-users menu-icon text-blue"></i>
                            <span class="menu-title">Usuarios</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'active' : '' }}"
                            data-toggle="collapse" href="#page-layouts"
                            aria-expanded="{{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'true' : 'false' }}"
                            aria-controls="page-layouts">
                            <i class="fa fa-flask menu-icon text-blue"></i>
                            <span class="menu-title">Exámenes</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse {{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'show' : '' }}"
                            id="page-layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('exam') ? 'active' : '' }}"
                                        href="{{ route('exam') }}">
                                        Gestionar Exámenes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('results') ? 'active' : '' }}"
                                        href="{{ route('results') }}">
                                        Ver Resultados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('chart.appoiment') ? 'active' : '' }}"
                            href="{{ route('chart.appoiment') }}">
                            <i class="fa fa-chart-line menu-icon text-blue"></i>
                            <span class="menu-title">Graficas</span>
                        </a>
                    </li>
                @endhasrole

            </ul>
            @hasrole('Bioquimico')
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('generic.table') ? 'active' : '' }}"
                        href="{{ route('generic.table') }}">
                        <i class="fa fa-tasks menu-icon"></i>
                        <span class="menu-title">Turnos</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                        aria-controls="page-layouts">
                        <i class="fa fa-flask menu-icon"></i>
                        <span class="menu-title">Examenes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="page-layouts" style="">
                        <ul class="nav flex-column sub-menu">
                            @hasrole('Admin')
                                <li class="nav-item d-none d-lg-block"> <a
                                        class="nav-link {{ Route::is('exam') ? 'active' : '' }}"
                                        href="{{ route('exam') }}">Gestionar
                                        Examenes</a>
                                </li>
                            @endrole
                            <li class="nav-item"> <a class="nav-link {{ Route::is('exam.create') ? 'active' : '' }}"
                                    href="{{ route('exam.create') }}">Crear
                                    resultados</a>
                            </li>
                            <li class="nav-item d-none d-lg-block"> <a
                                    class="nav-link {{ Route::is('results') ? 'active' : '' }}"
                                    href="{{ route('results') }}">Ver
                                    resultados</a></li>
                        </ul>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'active' : '' }}"
                        data-toggle="collapse" href="#page-layouts"
                        aria-expanded="{{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'true' : 'false' }}"
                        aria-controls="page-layouts">
                        <i class="fa fa-flask menu-icon"></i>
                        <span class="menu-title">Exámenes</span>
                        <i class="menu-arrow"></i>
                    </a>

                    <div class="collapse {{ request()->routeIs('exam*') || request()->routeIs('results*') ? 'show' : '' }}"
                        id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            @hasrole('Admin')
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('exam') ? 'active' : '' }}"
                                        href="{{ route('exam') }}">
                                        Gestionar Exámenes
                                    </a>
                                </li>
                            @endhasrole
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('exam.create') ? 'active' : '' }}"
                                    href="{{ route('exam.create') }}">
                                    Crear Resultados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('results') ? 'active' : '' }}"
                                    href="{{ route('results') }}">
                                    Ver Resultados
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            @endrole
            @hasrole('Paciente')
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('appoiment.index') ? 'active' : '' }}"
                        href="{{ route('appoiment.index') }}">
                        <i class="fa fa-tasks menu-icon"></i>
                        <span class="menu-title">Turnos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('results') ? 'active' : '' }}" href="{{ route('results') }}">
                        <i class="fa fa-flask menu-icon"></i>
                        <span class="menu-title">Mis Examenes</span>
                    </a>
                </li>
            @endrole

        </div>
    </div>
</nav>
