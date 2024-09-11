<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/login.css">
    <title>MOON++</title>
</head>

<body>
    <div class="topSide">
        <div class="netflixIcon">
            <a href="/">
            <img src="/img/moonbrand.png" alt="Logo"
                    class="img-netflixIcon" />
            </a>
        </div>
        <div class="parent-login">
            <!-- Adaptando o layout de login para o Netflix Clone -->
            <form method="POST" action="{{ route('login') }}" class="login-card">
                @csrf
                <h1>Entrar</h1>
                
                <!-- Campo de Email -->
                <div class="userInput">
                    <input type="email" name="email" id="email" class="block mt-1 w-full bg-gray-700 border-none rounded-lg p-3 text-white" placeholder="Email ou número de telefone" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Campo de Senha -->
                <div class="userInput">
                    <input type="password" name="password" id="password" class="block mt-1 w-full bg-gray-700 border-none rounded-lg p-3 text-white" placeholder="Senha" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Botão de Entrar -->
                <div>
                    <button class="btn-login bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">
                        Entrar
                    </button>
                </div>

                <!-- Lembrar-me e Esqueceu a Senha -->
                <div class="remMe">
                    <div>
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 bg-gray-800 text-red-600 focus:ring-red-500 focus:ring-offset-gray-900" name="remember">
                        <label for="remember_me" class="cText">Lembrar-me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="cLink">Esqueceu sua senha?</a>
                    @endif
                </div>

                <!-- Registro -->
                <div class="signUp">
                    Novo por aqui? <a href="{{ route('register') }}" class="sLink">Assine agora</a>.
                </div>

              
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="footWidth">
        Moon+ é um serviço pago, baseado em assinatura e sujeito a termos e condições. <a href="tel:000-800-919-1694" class="tel-link"></a>
            <div>
                <ul class="footLay">
                    <li class="footList">
                        <a href="#" class="footLink">FAQ</a>
                    </li>
                    <li class="footList">
                        <a href="#" class="footLink">Centro de ajuda</a>
                    </li>
                    <li class="footList">
                        <a href="#" class="footLink">Termos de uso</a>
                    </li>
                    <li class="footList">
                        <a href="#" class="footLink">Privacidade</a>
                    </li>
                    <li class="footList">
                        <a href="#" class="footLink">Trabalhe conosco</a>
                    </li>
                    <li class="footList">
                        <a href="#" class="footLink">Informações</a>
                    </li>
                </ul>
            </div>
            <div>
                <select class="fa select-language">
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;Português</option>
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;English</option>
                </select>
            </div>
        </div>
    </div>
  
</body>

</html>
