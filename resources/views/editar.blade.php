<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Crud.css">
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
                        <h1>Edite os Filmes</h1>
                        <h3 class="subtitle"><small>Troque as informações do filme</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-start mt-4">
            <div class="col">

                <form method="POST" action="/atualizar/{{$filmes->id}}" enctype="multipart/form-data">
                    @csrf
                    <label for="tituloinput" class="form-label">Título</label>
                    <input type="text" class="form-control custom-input" value="{{$filmes->titulo}}" name="titulo" required>
                    <br><br>
                    <img src="/img/filmes/{{$filmes->image}}" width="110" height="150" class="img-responsive" id="imgpreview">
                    <br><br>
                    <label for="imageinput" class="form-label">Imagem</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                    <br><br>
                    <label for="descricaoinput" class="form-label">Descrição</label>
                    <input type="text" class="form-control custom-input" value="{{$filmes->descricao}}" name="descricao" required>
                    <br><br>
                    <label for="videoinput" class="form-label">Vídeo</label>
                    <input type="text" class="form-control custom-input" value="{{$filmes->video}}" name="video" required>
                    <br>
            </div>
            <br>
        </div>
        <br>
        <div class="row justify-content-start">
            <div class="col">
                <input class="btn btn-outline-primary" type="submit" value="Enviar">
                <input class="btn btn-outline-danger" type="reset" value="Resetar">
                </form>
            </div>
        </div>
    </div>
    <script>
        let photo = document.getElementById('imgpreview'); // Imagem estabelecida
        let file = document.getElementById('image'); // Puxa o Arquivo

        file.addEventListener('change', () => {
            if (file.files.length <= 0) {
                return;
            }
            let reader = new FileReader();
            reader.onload = () => {
                photo.src = reader.result;
            }

            reader.readAsDataURL(file.files[0]);
        });
    </script>
</body>

</html>