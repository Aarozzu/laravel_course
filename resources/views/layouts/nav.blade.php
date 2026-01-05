<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="left-nav">
            <a class="logo" href="/" style="text-decoration: none">MyLogo</a>
            <a href="/" class="home-link">Home</a>
        </div>

        @guest
            <div class="nav-links">
                <a href="{{ route('userlogin') }}">Login</a>
                <a href="{{ route('usersignup') }}">Sign Up</a>
            </div>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout-btn" type="submit">Logout</button>
            </form>        
        @endauth
        
    </nav>