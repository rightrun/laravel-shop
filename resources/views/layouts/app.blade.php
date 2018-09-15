<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop')-电商系统</title>
    
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap-grid.min.css" rel="stylesheet">
</head>
<body>
    
<div id="app" class="{{route_class()}}-page">
    @include('layouts.header');
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
</div>
<!-- js脚本 -->
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>