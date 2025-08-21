<?php
    include_once('../Model/model.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $ass = $_POST['ass'];
    $mens = $_POST['mens'];

    inserirContato($nome, $email, $tele, $ass, $mens);
    header("location: ../../contatos/contatos.html")

?>