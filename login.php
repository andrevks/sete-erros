<?php
    session_start();

    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];

    if(($usuario == "prof") && ($senha == "123")) {
        $_SESSION['prof'] = $usuario; 
        header('Location: principal.php');
        exit();
    } elseif (($usuario == "aluno") && ($senha == "123")) {
        $_SESSION['aluno'] = $usuario;
        header('Location: principal.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header("Location: index.php");
        exit();
    }
?>