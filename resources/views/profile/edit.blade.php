<link rel="stylesheet" href="/CSS/normalize.css">
<link rel="stylesheet" href="/CSS/style.css">

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
    
<x-app-layout>

    
    <div class="py-12 bg-gray-800 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  bg-white dark:bg-gray-800 0 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
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