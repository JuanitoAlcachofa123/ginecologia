<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ginecología y Obstetricia</title>
    
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('vista_admin.header_admin')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
