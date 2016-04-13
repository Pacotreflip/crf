@extends('layout')
@section('css')
<link href="/assets/css/modal.css" rel="stylesheet">
@stop
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">PERIODO {{$periodo}}</h1>
            <p class="text-center">Encuentra tus salones</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="content">
        <div class="title">¿Dónde están mis amigos?</div>
        <a class="btn btn-info" href="auth/facebook" role="button">Login with Facebook</a>
    </div>
</div>
<div
 class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

@if (Auth::check())
<div>
    <h4>{{ Auth::user()->name }}</h4>
    <h4>{{ Auth::user()->email }}</h4>
    <img src="{{ Auth::user()->avatar }}" height="100" width="100" />
</div>
@endif

<div class="container">
    <div class="row">
	<h2></h2>
    </div>
    <div class="row">
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Windows 8 modal - Click to View</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <H2></H2>
                        <h4>Your Laptop battery is less then 10%.Recharge the battery.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@stop
@section('scripts')
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '598795360280593',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@stop