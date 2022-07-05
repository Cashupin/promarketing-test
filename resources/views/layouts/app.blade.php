<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.styles')
    <title>ProMarketingChile</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-5">
        @yield('content')
    </div>

    @include('includes.script')
    @include('partials.session-status')
</body>

</html>
