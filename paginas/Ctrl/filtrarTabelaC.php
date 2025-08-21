<?php
    include_once '../Model/model.php';

    $assun = $_POST['assun'];

    if ($assun == "Reclamação" || $assun == "Sugestão" || $assun == "Elogio" || $assun == "Dúvida"){
        listarContato($assun);
        listarContatoLido($assun);    
        header("location: ../View/tabelasContatoV.php");
    } else {
        $assun == null;
        listarContato($assun);
        listarContatoLido($assun);
        header("location: ../View/tabelasContatoV.php");
    }
   




?>