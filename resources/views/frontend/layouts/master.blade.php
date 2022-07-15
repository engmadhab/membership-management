<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'Laravel Membership Management')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('styles')
</head>
<body>
<div id="wrapper">
    <p>Header</p>
    @yield('main-content')
    @yield('end-content')
    <p>footer</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@yield('page_scripts')
</body>
</html>