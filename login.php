<?php
session_start();

// USUÁRIO FIXO (depois podemos ligar no banco)
$usuario_correto = "murilo@gmail.com";
$senha_correta = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == $usuario_correto && $senha == $senha_correta) {
        $_SESSION["usuario"] = "Admin";
        header("Location: dashboard.php");
        exit();
    } else {
        $erro = "Email ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - Arsenal</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<style>

/* FUNDO */
body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(135deg, #052241, #ec2f2f);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CAIXA LOGIN */
.login-box {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    width: 350px;
    text-align: center;
}

/* TÍTULO */
.login-box h2 {
    font-family: Arial, Helvetica, sans-serif;
    color: #052241;
    margin-bottom: 20px;
}

/* INPUTS */
.login-box input {
    width: 96%;
    padding: 5px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid #333;
    background: #0a0a0a;
    color: white;
    transition: 0.3s;
}

.login-box input:focus {
    outline: none;
    border: 1px solid #052241;
    box-shadow: 0 0 10px #052241;
}

/* BOTÃO */
.btn-login {

    padding: 12px;
    background: #052241;
    color: white;
    border: none;
    border-radius: 8px;
    font-family: 'Orbitron', sans-serif;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s;
}

.btn-login:hover {
    background: #ec2f2f;
    box-shadow: 0 0 10px #ec2f2f;
}

/* ERRO */
.erro {
    color: #ff0055;
    margin-top: 10px;
}


</style>

</head>

<body>

<div class="login-box">

<h2>Arsenal Dash</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>
<input type="password" name="senha" placeholder="Senha" required>

<button class="btn-login">Entrar</button>

</form>

<?php if (isset($erro)) { echo "<div class='erro'>$erro</div>"; } ?>

</div>

</body>
</html>