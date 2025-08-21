<?php

function inserirContato($nome, $email, $tele, $ass, $mens){
    $sql = "call inserirContato('$nome', '$email', '$tele', '$ass','$mens')";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
    $mysqli -> query($sql);
}

function inserirContatoLido($id){
    $sql = "call inserirContatoLido('$id')";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
    $mysqli -> query($sql);
}

function inserirContatoNLido($id){
    $sql = "call inserirContatoNLido('$id')";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
    $mysqli -> query($sql);
}

function deletarContatoL($id){
    $sql = "call deletarContatoL('$id')";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
    $mysqli -> query($sql);
}

function deletarContatoNL($id){
    $sql = "call deletarContatoNL('$id')";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
    $mysqli -> query($sql);
}

function listarContato(){
	$tab = null;	
	$sql = "call listarContato()";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
	$result = $mysqli->query($sql);
	while ($linha = $result->fetch_assoc()){
		$tab[] = $linha;
	}	
	return $tab;
}

function listarContatoLido(){
	$tab = null;	
	$sql = "call listarContatoLido()";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
	$result = $mysqli->query($sql);
	while ($linha = $result->fetch_assoc()){
		$tab[] = $linha;
	}	
	return $tab;
}

function listarAssunto(){
	$tab = null;	
	$sql = "call listarAssunto()";
    $mysqli = new mysqli("localhost:3306", "root", "", "TCA__Lar_Betel");
	$result = $mysqli->query($sql);
	while ($linha = $result->fetch_assoc()){
		$tab[] = $linha;
	}	
	return $tab;
}

?>
