<nav class="navbar navbar-inverse navbar-static-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <figure class="nav-company pull-left">
                    <img src="{{asset('img/company-icon.png') }}" alt="Grupo Hermes Infraestructura"/>
                </figure>
                Equipamiento
            </a>
        </div>
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          @if (auth()->check())
            <ul class="nav navbar-nav">
              @include ('partials.nav-app')
            </ul>
          @endif

          <ul class="nav navbar-nav navbar-right">
            @include ('partials.nav-user')
          </ul>
        </div>
    </div>
</nav>