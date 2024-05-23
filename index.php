<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="login-container" id="loginContainer">
        <img src="assets/img/senai-logo.png" alt="Logomarca" width="200">
        <form id="loginForm">
            <label for="login">Login</label>
            <input type="text" id="login" placeholder="Digite seu login">
            <label for="senha">Senha</label>
            <input type="password" id="senha" placeholder="Digite sua senha">
            <!-- Adicionando o reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6LemFWspAAAAAG-6eAY4gborCdmvFeVpVWw1ykFP"></div>
            <button type="button" id="loginButton">Entrar</button>
            <p id="errorMessage" style="color: red; display: none;">Login ou Senha incorretos.</p>
            <p id="recaptchaErrorMessage" style="color: red; display: none;">Por favor, ative o reCAPTCHA.</p>
            <p id="blankFieldsErrorMessage" style="color: red; display: none;">Por favor, preencha todos os campos.</p>
        </form>
        <p><a href="#">Esqueceu a senha? Clique aqui.</a> </p>
    </div>
    <!-- Adicionando o script do reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/login.js"></script>
</body>
</html>
