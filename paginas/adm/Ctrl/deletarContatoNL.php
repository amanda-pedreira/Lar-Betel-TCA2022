<?php
    include_once('../Model/model.php');

   $id = $_GET['id'];

    deletarContatoNL($id);
    header("location: ../View/TabelasContatoV.php")

?>