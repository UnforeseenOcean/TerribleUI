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
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
  @yield('head')
</head>

<body>

  <nav>
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo left">nothing</a>
      <ul class="right">
        @guest
        <li><a href="/login">Log in</a></li>
        <li><a href="/register">Register</a></li>
        @else<a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          {{ __('LOG OUT') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endguest
      </ul>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
</body>
<script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
@yield('scripts')

</html>