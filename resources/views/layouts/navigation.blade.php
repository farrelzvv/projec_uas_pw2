<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles.css') }}">
</head>
<body>
    <nav>
        <ul class="nav__links" id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#pembina">Pembina</a></li>
            <li><a href="#Regist">Daftar UMKM</a></li>
            
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                        <div class="dropdown-content">
                            <a href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</body>
</html>
