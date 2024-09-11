<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS/normalize.css">
    <link rel="stylesheet" href="/CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/x-icon" href="/img/logo.png">

    <title>Moon+</title>
</head>

<body>
    <nav class="navbar">
        <div class="left-container">
            <img src="/img/moonbrand.png" alt="" class="brand-logo">
            <ul class="nav-links">
                <li class="nav-items"><a href="#">Home</a></li>
                <li class="nav-items"><a href="/cadastrar">Filmes</a></li>
                <li class="nav-items"><a href="/listartabela">Series</a></li>
                <li class="nav-items"><a href="#">Kids</a></li>
            </ul>
        </div>

        <div class="right-container">
            <a href="#" class="user-name">Olá, {{ auth()->user()->name }}!</a>
            <!-- Adicionando o dropdown -->
            <div class="dropdown">
                <a href="#" class="profile-avatar">
                    <img src="/img/default.png" alt="" class="profile-avatar-img">
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-content">
                    <a href="/profile">Perfil</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </nav>

    <section class="banner">
        <div class="carousel-container">
            <div class="carousel">
                <!-- <div class="slider">
                    <div class="slider-content">
                        <h1 class="movie-title">LUCA</h1>
                        <p class="movie-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis a iste nobis unde fuga ea, assumenda dolorum enim mollitia necessitatibus consequatur doloremque veniam vel perferendis eveniet harum nisi, rem aliquam!</p>
                    </div>
                    <img src="/img/slider 5.png" alt="">
                </div> -->
            </div>
        </div>
    </section>

    <section class="cards">
        <div class="video-card-container">
            <div class="video-card">
                <img src="/img/disney.png" alt="" class="video-card-image">
                <video src="/videos/disney.mp4" class="card-video" loop autoplay muted></video>
            </div>
            <div class="video-card">
                <img src="/img/pixar.png" alt="" class="video-card-image">
                <video src="/videos/pixar.mp4" class="card-video" loop autoplay muted></video>
            </div>
            <div class="video-card">
                <img src="/img/star-wars.png" alt="" class="video-card-image">
                <video src="/videos/star-war.mp4" class="card-video" loop autoplay muted></video>
            </div>
            <div class="video-card">
                <img src="/img/marvel.png" alt="" class="video-card-image">
                <video src="/videos/marvel.mp4" class="card-video" loop autoplay muted></video>
            </div>
            <div class="video-card">
                <img src="/img/geographic.png" alt="" class="video-card-image">
                <video src="/videos/geographic.mp4" class="card-video" loop autoplay muted></video>
            </div>
        </div>
    </section>

    <section class="entretenimento">
        <h1 class="title-section">Lançamentos</h1>
        <div class="media-list">
            <button class="prev-btn"><img src="/img/pre.png" alt=""></button>
            <button class="nxt-btn"><img src="/img/nxt.png" alt=""></button>

            <div class="media-container">
                @if (count($filmes) > 0)
                @csrf
                @foreach ($filmes as $film)
                <div class="media">
                    <img src="/img/filmes/{{$film->image}}" alt="" class="media-img">
                    <div class="media-info">
                        <h2 class="media-name">{{$film->titulo}}</h2>
                        <h6 class="media-desc">{{$film->descricao}}</h6>
                        <div class="icons">
                            <button class="watch-btn" onclick="openPopup('{{ $film->titulo }}', '{{ $film->descricao }}', '{{ $film->video }}')">Assistir</button>
                            @if (isset($film->id))
                            @if ($film->favorito)
                            <form action="/desfavoritar/{{$film->id}}" method="post">
                                @csrf
                                <button type="submit" class="favorite"><i class='bx bxs-heart'></i></button>
                            </form>
                            @else
                            <form action="/favoritar/{{$film->id}}" method="post">
                                @csrf
                                <button type="submit" class="favorite"><i class='bx bx-heart'></i></button>
                            </form>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="media">
                    <img src="/img/posters/erro.png" alt="" class="media-img">
                    <div class="media-info">
                        <h2 class="media-name">TENTE NOVAMENTE</h2>
                        <h6 class="media-desc">Adicione conteúdo ao banco de dados</h6>
                        <div class="icons">
                            <button class="watch-btn">Assistir</button>
                            <a href="#" class="favorite"><i class='bx bx-heart'></i></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div id="popup" class="popup" style="display:none;">
            <h2>Detalhes do Filme</h2>
            <p class="popupTitulo1"><strong>Título:</strong> <span id="popupTitulo"></span></p>
            <a href="#" id="popupVideo" target="_blank">Assistir Trailer</a>
            <p><strong>Descrição:</strong> <span id="popupDescricao"></span></p>
            <button onclick="closePopup()">Fechar</button>
        </div>

        <h1 class="title-section">Favoritos</h1>
        <div class="media-list">
            <button class="prev-btn"><img src="/img/pre.png" alt=""></button>
            <button class="nxt-btn"><img src="/img/nxt.png" alt=""></button>

            <div class="media-container">
                @csrf
                @if (count($filmes) > 0)
                @foreach ($filmes as $film)
                @if ($film->favorito)
                <div class="media">
                    <img src="/img/filmes/{{$film->image}}" alt="" class="media-img">
                    <div class="media-info">
                        <h2 class="media-name">{{$film->titulo}}</h2>
                        <h6 class="media-desc">{{$film->descricao}}</h6>
                        <div class="icons">
                            <button class="watch-btn" onclick="openPopup('{{ $film->titulo }}', '{{ $film->descricao }}', '{{ $film->video }}')">Assistir</button>
                            <form action="/desfavoritar/{{$film->id}}" method="post">
                                @csrf
                                <button type="submit" class="favorite"><i class='bx bxs-heart'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
            </div>
        </div>

        <footer class="footer">
            <div class="footer__wrapper">
                <div class="logo">
                    <a class="logo__link" href="/"></a>
                </div>
                <nav class="footer__navigation">
                    <ul class="footer-menu">
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Política de Privacidade</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Proteção de Dados no Brasil</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Contrato de Assinatura</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Ajuda</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Dispositivos Compatíveis</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Sobre a Disney+</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/">Anúncios Personalizados</a>
                        </li>
                    </ul>
                </nav>
                <p class="footer__about">
                    Moon+ é um serviço pago, baseado em assinatura e sujeito a termos e condições. O serviço Disney+ é comercializado por The Walt Disney Company (Brasil) Ltda., World Trade Center, Av. Das Nações Unidas, 12.551, 12.555, 12.559, Piso 10, São Paulo/SP - CEP 04578-903, Brasil e CNPJ/M 73.042.962/0004-20
                </p>
                <p class="footer__copyright">
                    &copy; Moon. Todos os direitos reservados.
                </p>
            </div>
        </footer>

        <script src="/JS/Pop-Up.js"></script>
        <script src="/JS/Navbar.js"></script>
        <script src="/JS/Slider.js"></script>
        <script src="/JS/Carrossel.js"></script>
        <script src="/JS/cardvideo.js"></script>
        <script>
            // Função para selecionar aleatoriamente itens de uma matriz
            function escolherAleatoriamente(arr) {
                return arr[Math.floor(Math.random() * arr.length)];
            }

            // Função para alterar o nome e a imagem do perfil
            window.onload = function alterarNomeEImagem() {
                var imagens = ['/img/perfil.png', '/img/perfil2.png', '/img/perfil3.png', '/img/perfil4.png', '/img/perfil5.png'];
                var novaImagem = escolherAleatoriamente(imagens);
                // Atualizar elementos HTML com a imagem selecionada aleatoriamente
                var profileAvatar = document.querySelector('.profile-avatar-img');
                profileAvatar.src = novaImagem;
            }
        </script>
</body>

</html>