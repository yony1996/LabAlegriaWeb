<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('avatar/' . Auth::user()->avatar) }}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Hola {{ Auth::user()->name }}
                    </p>
                    <p class="designation">
                        {{ Auth::user()->getRoleNames()->first() }}
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Inicio</span>
            </a>
        </li>
        @hasrole('Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('schedule') }}">
                <i class="fa fa-clock menu-icon"></i>
                <span class="menu-title">Horario</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('users')}}">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Usuarios</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-user-lock menu-icon"></i>
                <span class="menu-title">Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fa fa-flask menu-icon"></i>
                <span class="menu-title">Examenes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('exam')}}">Gestionar Examenes</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Crear resultados</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Ver resultados</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-chart-line menu-icon"></i>
                <span class="menu-title">Graficas</span>
            </a>
        </li>
        @endhasrole
        @hasrole('Bioquimico')
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fa fa-flask menu-icon"></i>
                <span class="menu-title">Examenes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts" style="">
                <ul class="nav flex-column sub-menu">
                    @hasrole('Admin')
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('exam')}}">Gestionar Examenes</a>
                    </li>
                    @endrole
                    <li class="nav-item"> <a class="nav-link" href="#">Crear resultados</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Ver resultados</a></li>
                </ul>
            </div>
        </li>
        @endrole
        @hasrole('Paciente')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('appoiment.index') }}">
                <i class="fa fa-tasks menu-icon"></i>
                <span class="menu-title">Turnos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('exam')}}">
                <i class="fa fa-flask menu-icon"></i>
                <span class="menu-title">Mis Examenes</span>
            </a>
        </li>
        @endrole


    </ul>
</nav>
