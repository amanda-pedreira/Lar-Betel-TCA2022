<?php
    include_once('../Model/model.php');

    $id = $_GET['id'];

    inserirContatoNLido($id);
    header("location: ../View/tabelasContatoV.php");

?>