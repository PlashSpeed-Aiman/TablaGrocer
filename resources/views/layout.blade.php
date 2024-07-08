<!DOCTYPE HTML>
<html>
<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Tabla</title>
</head>

<body>
@include('navbar')
<div class="max-w-[85rem] mx-auto">
    @yield('content')
</div>
</body>

</html>
