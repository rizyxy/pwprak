<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/style.css">
    <title>PWEB | {{ $title }}</title>
</head>
<body>
    
    <div class="container-fluid w-100 m-0 p-0 vh-100">
        <div class="d-flex flex-row h-100">
            <div class="w-50 d-flex align-items-center justify-content-center flex-column bg-black text-white text-center">
                <p class="fs-1 fw-semibold">Laravel</p>
                <a class="fs-5 text-white fw-light" style="text-decoration: none" href={{ $title === "Login" ? "/register" : "/" }}>{{ $title === "Login" ? "Register" : "Login" }}</a>
            </div>
            <div class="w-50 d-flex flex-column p-5 justify-content-center align-items-start">
                @yield('auth-content')
            </div>
        </div>
    </div>

</body>
</html>