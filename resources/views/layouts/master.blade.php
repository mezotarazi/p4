<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Project 4')
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset='utf-8'>
</head>
<body>

<header>

    @yield('header')
</header>

<section>
    @yield('content')
</section>

<footer>
    @yield('footer')
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>