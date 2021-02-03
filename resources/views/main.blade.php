<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyTunes 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">MyTunes 2.0</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="{{ route('home') }}">Главная</a>
        <a class="p-2 text-dark" href="{{route('add')}}">Добавить</a>
    </nav>
</header>



<div class="container mt-5">
    <div class="row">
        <div class="col-9">
            @yield('content')
        </div>
        <div class="col-3">
            @include('aside')
        </div>
    </div>

</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">© 2017-2021</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Cool stuff</a></li>
                <li><a class="link-secondary" href="#">Random feature</a></li>
                <li><a class="link-secondary" href="#">Team feature</a></li>
                <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                <li><a class="link-secondary" href="#">Another one</a></li>
                <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Resource</a></li>
                <li><a class="link-secondary" href="#">Resource name</a></li>
                <li><a class="link-secondary" href="#">Another resource</a></li>
                <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Team</a></li>
                <li><a class="link-secondary" href="#">Locations</a></li>
                <li><a class="link-secondary" href="#">Privacy</a></li>
                <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/js/app.js"></script>
</body>
</html>
