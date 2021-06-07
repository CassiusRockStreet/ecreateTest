@extends('layouts/app')
@section('content')
    @include('layouts/header')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-data">
                    <h3>Register your account here</h3>
                    <form method="POST" action={{ route('register') }}>
                    @csrf
                    <div class="form-group">
                            <label>Full name</label>
                            <input type="name" name="Fullname" class="form-control @error('Fullname')border_error @enderror" value="{{ old('Fullname') }}">
                            @error('Fullname')
                                <p class="errorText">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control @error('email') border_error @enderror" value="{{ old('email') }}">
                            @error('email')
                                <p class="errorText">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control @error('password') border_error @enderror">
                            @error('password')
                                <p class="errorText">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Login" class="btn btn-primary btn-lg btn-widthFull float-right" value="Sign up">
                        </div>
                    </form>
                </div>
                <p class="noAccountText">Already have an account, Click <a href="/">here</a> to login.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection