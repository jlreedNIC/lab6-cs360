@extends('layouts.sample_layout')
<title>513 Studios Login (lab9)</title>


@section('body_content')
<body class="bg-primary">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>513 Studios</span></a>
                        </div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="login-form">
                            <h4>Developer Login</h4>
                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label class="pull-right">
                                    <a href="{{ route('forget.password.get') }}">Forgotten Password?</a>
									</label>

                                </div>

                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
