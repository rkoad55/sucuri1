@extends('layouts.auth')
@section('content')
<<<<<<< HEAD


<?php

if($branding)
    {

        if($branding->logo!="")
        {
            $logo=$branding->logo;
        }
        else
        {
            $logo='images/bd-logo-white.png';
        }

        
    }
    else
    {
        $logo='images/bd-logo-white.png';
    }  

    if($logo=="")
    {
        $logo='images/bd-logo-white.png';
    }
$logo='images/bd-logo-white.png';
    ?>


<div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4 col-md-push-4">
        <div class="login-logo">
          <img src="{{ $logo }}" alt="@if($branding)
                  {{ ucfirst($branding->name) }}
                @else
                {{ ucfirst(config('app.name')) }}
                @endif">
        </div>
        <div class="loginbox">

        <!-- DANGER ALERT -->
        <!--
          <div class="alert alert-danger">
            <strong>Whoops!</strong> Incorrect Email/Password
          </div>
        -->
          <p class="big">Login into your account</p>

          <form class="" role="form" method="POST" action="{{ url('login') }}">
            <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

            <div class="form-group">
              <input type="email" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label><input type="checkbox" name="remember"> Remember me </label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Login </button>
            </div>
          </form>

           @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
=======
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
>>>>>>> 061f75d059d6fe4cf0d970f67a1a7d82b93cf9c0
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h1>{{ trans('panel.site_title') }}</h1>
                        <p class="text-muted">{{ trans('global.login') }}</p>

<<<<<<< HEAD
        </div>
        <div class="loginbox-alternate">
          <p><a href="{{ route('auth.password.reset') }}">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div>



    @if($current_time_zone=Session::get('current_time_zone'))@endif
<input type="hidden" id="hd_current_time_zone" value="{{{$current_time_zone}}}">


<script type="text/javascript">
  $(document).ready(function(){
      if($('#hd_current_time_zone').val() ==""){ // Check for hidden field is empty. if is it empty only execute the post function
          var current_date = new Date();
          curent_zone = -current_date.getTimezoneOffset() * 60;
          var token = "{{csrf_token()}}";
          $.ajax({
            method: "POST",
            url: "{{URL::to('ajax/set_current_time_zone/')}}",
            data: {  '_token':token, curent_zone: curent_zone } 
          }).done(function( data ){
        });   
      }       
});
</script>
=======
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                    {{ trans('global.remember_me') }}
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    {{ trans('global.login') }}
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 061f75d059d6fe4cf0d970f67a1a7d82b93cf9c0
@endsection