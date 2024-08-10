<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro e Aspirantes a Becas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-primary">
            <div class="col-12 col-md-6">
                @yield('title')
            </div>
            <div class="col-12 col-md-6">
                <nav class="navbar navbar-dark navbar-expand-md text-light">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{route('aspirantes.index')}}" class="nav-link active">Aspirantes</a></li>
                        <li class="nav-item"><a href="{{route('estudiantes.index')}}" class="nav-link active">Estudiantes</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12 my-2">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>