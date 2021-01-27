<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiny Airlines</title>
    <link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
    <link rel="shortcut icon" href={{asset("images/icon.png")}} type="images/x-icon">
    <script src="https://kit.fontawesome.com/6f5f03190f.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('inc.header')
    @yield('page-content')
    @include('inc.footer')
</body>
</html>
