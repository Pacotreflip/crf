@if(Auth::check())
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i><img class="img-circle" src="{{Auth::user()->avatar}}"  height="35" width="35"/></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a></li>
        </ul>
    </li>
</ul>
@else
<form class="navbar-form navbar-right" method="POST" action="{{url('auth/login')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <input type="text" class="form-control input-sm" name="email" placeholder="E-Mail">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-sm" name="password" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Entrar</button>
    <a class="btn btn-primary btn-sm" href="{{url('auth/facebook')}}" role="button"><i class="fa fa-facebook-f fa-lg"></i> Facebook</a>
</form>
@endif