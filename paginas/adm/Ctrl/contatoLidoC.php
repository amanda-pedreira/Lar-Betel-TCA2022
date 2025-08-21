<?php
    include_once('../Model/model.php');

    $id = $_GET['id'];

    inserirContatoLido($id);
    header("location: ../View/tabelasContatoV.php");
    //include_once '../View/tabelasContatoV.php';

?>
