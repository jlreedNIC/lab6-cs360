@extends('layouts.sample_layout')
<title>Forgot Password</title>
  
@section('body-content')
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
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="login-form">
                            <h4>Reset Password</h4>
                            <form action="{{ route('forget.password.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
                                <div class="register-link text-center">
                                    <p>Back to <a href="{{ route('login') }}"> Home</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>