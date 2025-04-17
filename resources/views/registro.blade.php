<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Sistema GTI</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center items-center min-h-screen bg-blue-50">
        <div class="caixaLogin">
            <img id="imgAPAE" src="{{ asset('images/logo.png') }}" alt="Logo do Sistema" width="150">
            
            <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">Criar Nova Conta</h2>
            
            <form action="{{ route('salva-conta') }}" method="POST" class="w-full">
                @csrf
                
                <div class="mb-4">
                    <input name="name" type="text" id="Nome" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Seu Nome Completo" required>
                </div>
                
                <div class="mb-4">
                    <input name="email" type="email" id="Email" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="seu@email.com" required>
                </div>
                
                <div class="mb-4 relative">
                    <input name="password" type="password" id="Senha" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10" placeholder="Sua Senha" required>
                    <button type="button" id="olhoIcon" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
                
                <div class="mb-6">
                    <input name="password_confirmation" type="password" id="ConfirmaSenha" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10" placeholder="Confirme sua Senha" required>
                </div>
                
                <button type="submit" id="Registro" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Criar Conta
                </button>
                
                <div id="mensagemErro" class="mensagem-erro mt-3"></div>
            </form>
            
            <p class="text-sm text-center mt-6 text-gray-600">
                Já tem uma conta? <a href="/login" class="text-blue-600 hover:underline font-medium">Faça login aqui</a>
            </p>
        </div>
    </div>

    <script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>