<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @vite('resources/js/app.js')
</head>
<body>

    <div class="app d-flex flex-column vh-100">
        @include('partials.header') 

        <main class="flex-grow-1">
            <div class="container text-center">
                @yield('content')
            </div>
        </main>

        @include('partials.footer')
    </div>
</body>
</html>