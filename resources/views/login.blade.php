@extends('layouts.main')
@section('hyasabcontentauncha')

<div class="register-wrapper">
        <form class="register-card" action="{{ route('login') }}" method="POST">
            @csrf

            @if(session('error'))
                <div style="color: red">
                    {{ session('error') }}
                </div>
            @endif

            <h2>Login</h2>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password">
            </div>

            <button type="submit">Login</button>

            <p class="login-link">
                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
            </p>
        </form>
    </div>

@endsection