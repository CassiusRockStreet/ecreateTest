@extends('layouts/app')
@section('content')
    @include('layouts/header')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-data">
                    <h3>Sign in</h3>
                    <form method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="emailaddress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" class="btn btn-primary btn-lg btn-widthFull float-right" value="Register in">
                        </div>
                    </form>
                </div>
                <p class="noAccountText">Dont have an account, Click <a href="{{ route('register') }}">here</a> to register.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection