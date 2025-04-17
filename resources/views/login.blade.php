<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="caixaLogin">
        <div id="imgAPAE">
        <img src="{{ Vite::asset('resources/images/APAE.jpg') }}" width="300" alt="APAE">
            <input type="text" id="Usuario" placeholder="Usuário">
            <div class="senhaContainer">
                <input type="password" id="Senha" placeholder="Senha">
                <button id="olhoIcon" class="olhoIcone"></button>  
            </div>
            <button id="Login">Login</button>
            <p id="mensagemErro" class="mensagem-erro"></p>
        </div>
        <!-- No final do formulário de login, antes de fechar a div principal -->
<div class="text-center mt-4">
    <p class="text-sm text-gray-600">
        Não tem uma conta? 
        <a href="/registro" class="font-medium text-blue-600 hover:underline">Crie uma aqui</a>
    </p>
</div>
    </div>
    @vite(['resources/js/login.js']) <!-- Se tiver JavaScript -->
</body>
</html>