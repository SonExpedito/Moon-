<!DOCTYPE html>

<head>
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" 
          href="CSS/login.css">
    <title>MOON++ Registro</title>
</head>

<body>
    <div class="topSide">
        <div class="netflixIcon">
            <a href="/">
                <img src="/img/moonbrand.png"
                     class="img-netflixIcon" />
            </a>
        </div>
        <div class="parent-login">
            <form method="POST" action="{{ route('register') }}" class="login-card">
                @csrf
                <h1>Cadastre-se</h1>
                
                <!-- Name -->
                <div class="userInput">
                    <input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Nome" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                
                <!-- Email Address -->
                <div class="userInput">
                    <input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
                </div>
                
                <!-- Password -->
                <div class="userInput">
                    <input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Senha" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="userInput">
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirme a Senha" required autocomplete="new-password" />
                </div>

                <!-- Botão de registro -->
                <div>
                    <button class="btn-login">Registre-se</button>
                </div>

                <!-- Já registrado -->
                <div class="signUp">
                    Já está registrado? <a href="{{ route('login') }}" class="sLink">Login</a>.
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
