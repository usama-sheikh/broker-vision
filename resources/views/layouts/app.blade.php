<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="g-sidenav-show  bg-gradient-dark">
@include('layouts.sidebar')
<main class="main-content bg-gradient-dark position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('layouts.navbar')
@yield('content')
@include('layouts.script')
@include('elements.alerts')
</body>
</html>
