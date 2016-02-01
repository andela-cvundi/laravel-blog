<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
</head>
<body>
    @include('partials.nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>