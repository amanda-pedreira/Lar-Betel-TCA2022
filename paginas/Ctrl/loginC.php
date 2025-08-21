<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if($login != "admin" || $senha != "123"){
        include_once("login.php");
        $mens = "Login/Senha incorretos, tente novamente!";
    } else {
        header("Location: ../View/tabelasContatoV.php");
    }
    





?>
