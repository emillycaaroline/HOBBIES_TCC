<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailErr = $senhaErr = ""; // Inicializa as variáveis de erro

    // Verifica se o campo 'email' está preenchido
    if (empty($_POST["email"])) {
        $emailErr = "Email é obrigatório";
    } else {
        $email = test_input($_POST["email"]);
        // Verifica se o formato do email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email inválido";
        }
    }

    // Verifica se o campo 'senha' está preenchido
    if (empty($_POST["senha"])) {
        $senhaErr = "Senha é obrigatória";
    } else {
        $senha = test_input($_POST["senha"]);
        // Aqui você pode adicionar mais validações para a senha, se necessário
    }

    // Se não houver erros, redirecione ou processe os dados do formulário
    if (empty($emailErr) && empty($senhaErr)) {
        // Processar os dados do formulário, por exemplo, inserir no banco de dados
        // E então redirecionar para outra página
        header("Location: success.php");
        exit();
    }
}

// Função para limpar os dados de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
