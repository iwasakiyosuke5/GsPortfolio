<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Site Info -->
    @yield('title')
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
    @vite(['resources/sass/style.scss'])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

</head>
<body class="container">
    <header id="header">
        <h1><a href="{{ route('top') }}">{{config('app.name')}}</a></h1>
        <ul id="global-menu">
            <li><a href="{{ route('about') }}">about</a></li>
            <li><a href="{{ route('work') }}">works</a></li>
            <li><a href="{{ route('contact') }}">contact</a></li>
        </ul>
    </header>

    @yield('content')

    <footer id="footer">
        <small>今日は {{date('Y.m.d')}} </small>
        <br>　　<br>
        <small>&copy; Gann</small>
        
    </footer>
    <footer2 id="footer">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


    </footer2>
</body>
</html>