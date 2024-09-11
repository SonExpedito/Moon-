<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOON++</title>

    <link rel="stylesheet" href="/css/Home.css">
    <link rel="stylesheet" href="mediaquery.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/bc3a1796c2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/img/moonbrand.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

</head>

<body>

    <div class="navbar">
        <li class="logo"><img src="/img/moonbrand.png" alt="Logo"></li>

        <li class="buttons">
            @if (Route::has('login'))
            <nav class="flex justify-end gap-4">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="button-style">
                    Painel de Controle
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="button-style">
                    Entrar
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="button-style">
                    Registrar
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </li>

    </div>

    <div class="main">
        <div class="area">
            <h1>Filmes, TV, Séries, Shows e muito mais</h1>
            <h3>Assista em qualquer lugar. Não hospedamos filmes, apenas indexamos conteúdo.</h3>

            <div class="search">
                <input type="text" class="box" placeholder="Email">
                
                <span class="try">Experimente 3000 dias grátis <i class="fas fa-chevron-right"></i></span>
            </div>
            <h4>Comece agora: faça login ou crie uma nova conta</h4>
        </div>
    </div>


    <div class="footer">
        <div class="footercon">
            <div class="flex1">
                <h5>    Moon+ é um serviço pago, baseado em assinatura e sujeito a termos e condições.</h5>
            </div>
            <ul class="list1">
                <li><a href="">FAQ</a></li>
                <li><a href="">Relações com Investidores</a></li>
                <li><a href="">Maneiras de Assistir</a></li>
                <li><a href="">Informações Corporativas</a></li>
                <li><a href="">Originais Netflix</a></li>
            </ul>
            <ul class="list1">
                <li><a href="">Início</a></li>
                <li><a href="">Trabalhe Conosco</a></li>
                <li><a href="">Termos de Uso</a></li>
                <li><a href="">Fale Conosco</a></li>
            </ul>
            <ul class="list1">
                <li><a href="">Conta</a></li>
                <li><a href="">Resgatar Cartões Presente</a></li>
                <li><a href="">Privacidade</a></li>
                <li><a href="">Teste de Velocidade</a></li>
            </ul>
            <ul class="list1">
                <li><a href="">Centro de Mídia</a></li>
                <li><a href="">Comprar Cartões Presente</a></li>
                <li><a href="">Preferências de Cookies</a></li>
                <li><a href="">Avisos Legais</a></li>
            </ul>
        </div>
    </div>

    <div class="end">
        <h2> &copy; Moon++  . Todos os direitos reservados.</h2>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.navbar .hamburger');
  const navbar = document.querySelector('.navbar');

  hamburger.addEventListener('click', function() {
    navbar.classList.toggle('active');
  });
});
</script>

</body>

</html>
