<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Crud.css">
    <style>
        @media (max-width: 990px) {
            .logo {
                display: none;
            }

            .logo-link {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="container mt-5">


        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/dashboard" class="logo-link">
                        <img src="/img/moonbrand2.png" alt="Logo" class="logo">
                    </a>
                    <div class="text-center flex-grow-1">
                        <h1>Tabela de conteúdos Moon+</h1>
                        <h3 class="subtitle"><small>Todos os conteúdos disponíveis</small></h3>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Favorito</th>
                            <th>Video</th>
                            <th>Poster</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @if (count($filmes) > 0)
                            @csrf
                            @foreach ($filmes as $film)
                            <tr class="table-active">
                                <th>{{ $film->titulo }}</th>
                                <th>{{ $film->descricao }}</th>
                                <th>{{ $film->favorito }}</th>
                                <th>{{ $film->video }}</th>
                                <th><img src="/img/filmes/{{ $film->image }}" alt="" class="rounded-1 img-thumbnail custom-thumbnail"></th>
                                <th><a href="/editar/{{ $film->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/excluir/{{ $film->id }}" class="btn btn-danger">Excluir</a>
                                </th>
                                < </tr>
                                    @endforeach
                                    @else
                            <tr>
                                <th>Sem registros!</th>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</body>

</html>