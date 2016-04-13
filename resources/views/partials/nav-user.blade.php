@if(Auth::check())
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i><img class="img-circle" src="{{Auth::user()->avatar}}"  height="35" width="35"/></i> {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a></li>
    </ul>
</li>
@else
<li>Usuario<input id="usuario" type="text" class="form-control input-sm" /></li>
<li>Usuario<input type="text" class="form-control input-sm" /></li>
        <li><a href="{{ url('auth/login') }}"><i class="fa fa-sign-in fa-fw"></i> Iniciar Sesión</a></li>
@endif