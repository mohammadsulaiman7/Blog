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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
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
          <div class="alert alert-primary" role="alert">
            Welcome : {{Auth::user->name()}}
          </div>
          @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('all.min.js')}}"></script>
    @vite('public/js/app.js')
</body>
</html>
