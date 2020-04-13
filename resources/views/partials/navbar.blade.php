<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-8">
                    <div id="colorlib-logo"><a href="{{ route('home') }}">American Travel Int</a></div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-4 text-right menu-1">
                    <ul>
                        <li><a class="nabbar-links" style="font-size: 16px; color: @if(Request::path()=='/') #ffdd00 @endif"; href="{{ route('home') }}">Inicio</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: @if(Request::path()=='Destinos') #ffdd00 @endif"; href="{{ route('destination') }}">Destinos</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: @if(Request::path()=='Paquetes') #ffdd00 @endif"; href="{{ route('package') }}">Paquetes</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: @if(Request::path()=='Servicios') #ffdd00 @endif"; href="{{ route('services') }}">Servicios</a></li>
                        <li><a class="nabbar-links" style="font-size: 16px; color: @if(Request::path()=='Contacto') #ffdd00 @endif"; href="{{ route('contact') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

