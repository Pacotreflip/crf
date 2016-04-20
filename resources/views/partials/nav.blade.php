<!--<nav class="navbar navbar-inverse navbar-static-top" role="banner">
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
                    <img src="" alt="Grupo Hermes Infraestructura"/>
                </figure>
                Equipamiento
            </a>
        </div>
        <center>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              @if (auth()->check())
                <ul class="nav navbar-nav">
                  @include ('partials.nav-app')
                </ul>
              @endif
            </div>
        </center>
    </div>
</nav>-->

<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                    <img src="{{asset('img/company-icon.png')}}" height=40.3" width="32.8" alt="Salones Upiicsa"/>
            </a>
            <!--<a class="navbar-brand" href="#">Salones UPIICSA</a>-->
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                @if (auth()->check())
                <ul class="nav navbar-nav">
                    @include ('partials.nav-app')
                </ul>
                @endif
                @include('partials.nav-user')
            </div>
        </center>
    </div>
</div>