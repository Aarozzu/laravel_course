@extends('layouts.main')
@section('container')

    <div class="register-wrapper">
        <form class="register-card" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Create Account</h2>

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm password">
            </div>

            <button type="submit">Register</button>

            <p class="login-link">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>
@endsection