@extends('layouts.sample_layout')
<title>513 Studios Register (lab9)</title>

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
                        </div>

                        <div class="login-form">
                            <h4>Developer Registration</h4>
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name" id="username" name="username">
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Agree the terms and policy 
									</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>