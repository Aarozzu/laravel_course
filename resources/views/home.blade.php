@extends('layouts.main')
@section('hyasabcontentauncha')
    <!-- PAGE CONTENT -->
    @guest
        <main style="padding: 40px; text-align: center;">
            <h1>Hello, Guest</h1>
        </main>
    @endguest
    
    @auth
        <main style="padding: 40px; text-align: center;">
            <h1>Hello, {{ Auth::user()->name }}. You are logged in</h1>
        </main>
    @endauth

    <div class="container">
        <div class="container-inner">

            <div class="section-header">
                <h2 class="section-title">Available Users</h2>

                @auth
                    <a href="{{ route('category.show') }}" class="create-btn">
                        + Create Category
                    </a>
                @endauth
            </div>


            <div class="list-card">

                <div class="card-item">
                    <div class="card-content">
                        <h3>Smriti Gurung</h3>
                        <p>Posts:12</p>
                    </div>
                    <a class="details-btn" href="{{ route('postdetail') }}">View Posts</a>
                </div>
                <div class="card-item">
                    <div class="card-content">
                        <h3>Tom Cruise</h3>
                        <p>Posts:5</p>
                    </div>
                    <a class="details-btn" href="{{ route('postdetail') }}">View Posts</a>
                </div>
                <div class="card-item">
                    <div class="card-content">
                        <h3>Iron Man</h3>
                        <p>Posts:8</p>
                    </div>
                    <a class="details-btn" href="{{ route('postdetail') }}">View Posts</a>
                </div>

            </div>

        </div>
    </div>
    
@endsection