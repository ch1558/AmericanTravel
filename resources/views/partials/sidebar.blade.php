<!-- Sidebar -->
<div class="sidebar" data-color="white" data-active-color="warning">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">SGI - AMERICAN TRAVEL INT</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="@if(Request::path()=='SGI/Dashboard') active @endif">
                <a href="{{ route('dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Inicio</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Cuentas') active @endif">
                <a href="{{ route('account') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Cuentas</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Destinos') active @endif">
                <a href="{{ route('destination') }}">
                    <i class="nc-icon nc-world-2"></i>
                    <p>Destinos</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Empleados') active @endif">
                <a href="{{ route('employeer') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Empleados</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Pagina') active @endif">
                <a href="{{ route('page') }}">
                    <i class="nc-icon nc-html5"></i>
                    <p>Información Página</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Mailing') active @endif">
                <a href="{{ route('mailing') }}">
                    <i class="nc-icon nc-chat-33"></i>
                    <p>Mailing</p>
                </a>
            </li>
            <li class="@if(Request::path()=='SGI/Paquetes') active @endif">
                <a href="{{ route('package') }}">
                    <i class="nc-icon nc-map-big"></i>
                    <p>Paquetes</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="logout.php">
                    <i class="nc-icon nc-button-power"></i>
                    <p>Cerrar Sesión</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End sidebar-->