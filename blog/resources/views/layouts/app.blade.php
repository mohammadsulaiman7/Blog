<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('all.min.js')}}">
    <!-- Scripts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"> </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} --}}
                    <a class="navbar-brand" href="{{ route('posts.index') }}">
                        Posts
                </a>
                <a class="navbar-brand text-primary" href="{{ route('posts.create') }}">Create post</a>
                {{-- <a href="{{route('profile-user')}}" class="navbar-brand ">Profile</a> --}}
                <a href="#" class="navbar-brand ">Search</a>
                <button class="btn btn-outline-secondary"><i class="fa-solid fa-message"></i></button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <a class="nav-link  fw-bold text-secondary" href="{{route('profile-user')}}">
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="nav-link  fw-bold text-secondary" href="{{route('profile-user')}}">
                                    <img src="{{asset('storage/profile-pictures/' .Auth::user()->profile )}}" alt="{{Auth::user()->profile}}" class="rounded" style="width: 30px; height:30px">
                                </a>
                            <div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (session()->has('success'))
        <div class="alert alert-success w-25 ms-auto me-auto mt-3" role="alert">
            {{session()->get('success')}}
          </div>
          @endif
          @if (session()->has('error'))
          <div class="alert alert-danger w-25 ms-auto me-auto mt-3" role="alert">
            {{session()->get('error')}}
          </div>
          @endif
          @if (session()->has('welcome'))
          <div class="alert alert-success" role="alert">
            Welcome : {{Auth::user->name()}}
          </div>
          @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('all.min.js')}}"></script>
    @vite('public/js/app.js')
    @vite('public/js/updateCommentCount.js')
    @vite('public/js/deleteComment.js')
</body>
</html>
