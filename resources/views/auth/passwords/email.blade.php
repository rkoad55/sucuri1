@extends('layouts.auth')
@section('content')
<<<<<<< HEAD
<?php

// if($branding)
//     {

//         if($branding->logo!="")
//         {
//             $logo=$branding->logo;
//         }
//         else
//         {
//             $logo='images/bd-logo-white.png';
//         }

        
//     }
//     else
//     {
//         $logo='images/bd-logo-white.png';
//     }  

//     if($logo=="")
//     {
//         $logo='images/bd-logo-white.png';
//     }
$logo='/images/bd-logo-white.png';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-push-4">
                <div class="login-logo">
                   <img src="{{ $logo }}" alt=
                {{ ucfirst(config('app.name')) }}
                ">
                </div>
                <div class="loginbox">
                    @if (session('status'))
                <!-- SUCCESS ALERT -->
               
                    <div class="alert alert-success">
                         {{ session('status') }}
                    </div>
                @endif

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
                    @endif
                    <p class="big">Forgot your password?</p>
                    <p>Enter your email address below and we will send you instructions on how to change your password.</p>

                    <form class="" role="form" method="POST" action="{{ url('password/email') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
=======
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <h1>
                            <div class="login-logo">
                                <a href="#">
                                    {{ trans('panel.site_title') }}
                                </a>
                            </div>
                        </h1>
                        <p class="text-muted"></p>
                        <div>
                            {{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" required="autofocus" placeholder="{{ trans('global.login_email') }}">
                                @if($errors->has('email'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </em>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    {{ trans('global.reset_password') }}
                                </button>
                            </div>
>>>>>>> 061f75d059d6fe4cf0d970f67a1a7d82b93cf9c0
                        </div>
                    </form>
                </div>
                <div class="loginbox-alternate">
                    <p><a href="#">Back to Login</a></p>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    
=======
</div>
>>>>>>> 061f75d059d6fe4cf0d970f67a1a7d82b93cf9c0
@endsection