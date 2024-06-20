<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>PictShop972</title>
</head>
<body>

    <div class="container">
        <div class="nav">
            @yield('navbar')
        </div>
            <div class="content">
                @yield('main')
                </div>
    </div>

</body>
</html>

