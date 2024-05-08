<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Login</title>
    <link rel="stylesheet" href="cadlog.css">
</head>
<body>
    <form class="t-login mx-auto">
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <div class="form-floating">
            <label for="floatingInput">Email</label>
            <input type="email" class="form-control" id="floatingInput" placeholder="Email ou nome de usuario">
        </div>

        <div class="form-floating">
            <label for="floatingPassword">Senha</label><br>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
        </div>
        <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.html';">Entrar</button><br><br>
        <p>Esqueceu sua senha?</p>
        <p>Não possui uma conta? <a href="cadastro.html">Cadastre-se</a><br></p>
    </form>
    <?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o email e a senha correspondem aos dados do usuário
    if ($email == "usuario@example.com" && $senha == "senha123") {
        // Se as credenciais estiverem corretas, redireciona para a página de dashboard
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit(); // Certifica-se de que o script não continue executando após o redirecionamento
    } else {
        // Se as credenciais estiverem incorretas, exibe uma mensagem de erro
        echo "Email ou senha incorretos. Por favor, tente novamente.";
    }
}
?>

    
</body>
</html>

