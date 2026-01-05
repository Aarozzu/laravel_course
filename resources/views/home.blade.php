@extends('layouts.main')
@section('hyasabcontentauncha')
    <!-- PAGE CONTENT -->
    @guest
        <main style="padding: 40px; text-align: center;">
            <h1>Hello, Guest</h1>
            <p>Contents</p>
        </main>
    @endguest
    
    @auth
        <main style="padding: 40px; text-align: center;">
            <h1>Hello, {{ Auth::user()->name }}. You are logged in</h1>
            <p>Contents</p>
        </main>
    @endauth

    
@endsection 








