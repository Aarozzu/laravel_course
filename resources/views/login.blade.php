@extends('layouts.main')
@section('hyasabcontentauncha')

<div class="register-wrapper">
        <form class="register-card" action="{{ route('loginuser') }}" method="POST">
            @csrf
            @if(session('error'))
                <div style="color: red; text-align: center;">
                    {{ session('error') }}
                </div>
            @endif

            <h2>Login</h2>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email">
                @error('email')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password">
                @error('password')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit">Login</button>

            <p class="login-link">
                Don't have an account? <a href="{{ route('usersignup') }}">Sign Up</a>
            </p>
        </form>
    </div>

@endsection