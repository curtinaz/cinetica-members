<?php

require_once '../config.php';

if (!$_POST['mail'] || !$_POST['senha']) {
    echo "Preencha todos os campos";
} else {
    $email = $_POST['mail'];
    $senha = md5($_POST['senha']);

    session_start();

    $loginQuery = $conexao->query("SELECT * FROM user WHERE email = '$email' AND senha = '$senha'");

    if ($loginQuery->num_rows == 1) {
        $userQuery = $conexao->query("SELECT `nome`, `email`, `id` FROM user WHERE email = '$email' AND senha = '$senha'");
        $userInfos = $userQuery->fetch_all(MYSQLI_ASSOC);
        // pega o nome do usuário do banco de dados.

        // $_COOKIE["logado"]="YES";
        $_SESSION["name"]=$userInfos[0]['nome'];
        $_SESSION["email"]=$userInfos[0]['email'];
        // $_COOKIE["user_id"]=$userInfos[0]['id'];
        // $_COOKIE["email"]=$userInfos[0]['email'];

        setcookie("logado", "YES", strtotime('+30 days'), "/");
        setcookie("name", $userInfos[0]['nome'], strtotime('+30 days'), "/");
        setcookie("user_id", $userInfos[0]['id'], strtotime('+30 days'), "/");
        setcookie("email", $userInfos[0]['email'], strtotime('+30 days'), "/");


        // define que o usuário está logado e, define a variável de sessão name com o valor retirado do banco de dados.

        header("Location: ../index.php");
        die();
        
    } else {
        echo "Dados invalidos. <a href='../'>Refaça o login</a>";
    }
}

?>