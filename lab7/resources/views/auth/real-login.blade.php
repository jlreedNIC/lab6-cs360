@extends('layout')

<title>Login</title>

@section('content')
<main class="login-form">
    <div>
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="col-md-1 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                            <a href="{{ route('forget.password.get') }}">Reset Password</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            
                            </div>
                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection