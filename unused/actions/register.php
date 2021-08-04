<?php

session_start();
require_once '../config.php';

if (!$_POST['mail'] || !$_POST['senha'] || !$_POST['name'] || !$_POST['telefone']) {
    echo "Preencha todos os campos";

    setcookie('logado', '', 1, '/');
} else {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $senha = md5($_POST['senha']);
    //coloca todos os dados informados em uma variável

    $hasAccount = $conexao->query("SELECT * FROM user WHERE email = '$mail'");
    if ($hasAccount->num_rows > 0) {
        echo "Já existe uma conta com este e-mail, <a href='../'>faça login</a>";
    } else {
        $conexao->query("INSERT INTO `user` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$name', '$mail', '$senha')");

        $_SESSION["logado"]="YES";
        $_SESSION["name"]=$name;
        $_SESSION["email"]=$mail;

        $userQuery = $conexao->query("SELECT `nome`, `email`, `id` FROM user WHERE email = '$mail' AND senha = '$senha'");
        $userInfos = $userQuery->fetch_all(MYSQLI_ASSOC);

        setcookie("logado", "YES", strtotime('+30 days'), "/");
        setcookie("name", $userInfos[0]['nome'], strtotime('+30 days'), "/");
        setcookie("user_id", $userInfos[0]['id'], strtotime('+30 days'), "/");
        setcookie("email", $userInfos[0]['email'], strtotime('+30 days'), "/");
        
        // define que o usuário está logado e, como o nome que ele informou no post é confiável, uso ele mesmo para definir o valor da session name.

        header('Location: ../index.php');
        // redireciona o usuário para a página de 'logado'.
    }
}

$conexao->close();
// fecha o banco.

?>