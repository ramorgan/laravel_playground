<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Laravel Playground!')</title>
</head>

<body>



<ul>
    <li><a href="/">Home</a> </li>
    <li><a href="/contact">Contact us</a></li>
    <li><a href="/about">About</a></li>
</ul>

@yield('content')
</body>

</html>
