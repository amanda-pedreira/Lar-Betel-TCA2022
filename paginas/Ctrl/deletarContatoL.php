<?php
    include_once('../Model/model.php');

   $id = $_GET['id'];

    deletarContatoL($id);
    header("location: ../View/TabelasContatoV.php")

?>