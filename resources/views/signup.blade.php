@extends('layouts.main')
@section('hyasabcontentauncha')

<div class="register-wrapper">
    <form class="register-card" action="{{ route('usersignup.create') }}" method="POST">
        @csrf

        <h2>Sign Up</h2>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
            @error('name')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
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

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Retype password">
        </div>

        <button type="submit">Sign Up</button>

        <p class="login-link">
            Already have an account? <a href="{{ route('userlogin') }}">Login</a>
        </p>
    </form>
</div>

@endsection