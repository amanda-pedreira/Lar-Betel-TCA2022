<?php
    include_once("../Model/model.php");

	@$id = $_GET['id'];
	@$id = null;

	@$assun;

	if(isset($_GET['ordem'])){
		$ordem = $_GET['ordem'];
	} else {
		$ordem = 1;
	}

	if(!isset($assun)){
		$assun = null;
	}
	/*
	ini_set('display_errors', 0 );
	error_reporting(0);
	*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/tabelasContato/tabelaContato.css">
	<link rel="shortcut icon" href="../../../imagens/android-icon-192x192.png" type="image/x-icon">
    <title> ADM - Dados </title>
</head>
<body>
	<center>
    <h1> Mensagens Enviadas </h1>

	<!--
	<h3> Filtrar mensagens: </h3>
	<form action="../Ctrl/filtrarTabelaC.php" method="POST">

		<select name="assun">
			<?php 
			/*
				$tabAssun = listarAssunto();
					for ($x = 0; $x < count($tabAssun); $x++){
					echo  $tabAssun[$x]["assunto"].' - '.$tabAssun[$x]["assunto"].'<br>';		
					echo "<option value=".$tabAssun[$x]['assunto'].">".$tabAssun[$x]['assunto']."</option>";
				}
			*/
			?>
		</select><br><br>
		<input type="submit" value="Filtrar">
	</form>
	-->
	</center><br>

	<div id="formatarTabela">
   	<h2> Mensagens NÂO LIDAS: </h2>
    <?php 
		$tab = listarContato();

		if ($tab != 0){
			echo '<table>';
			echo '<thead>'; 
			echo '<tr>'; 
			echo '<th> ID </th>';
			echo '<th> NOME </th>';
			echo '<th> EMAIL </th>';
			echo '<th> TELEFONE </th>';
			echo '<th> ASSUNTO </th>';
			echo '<th> MENS </th>';
			echo '<th> LIDO </th>';
			echo '<th> EXCLUIR </th>';
			echo '</tr>';	
			echo '</thead>'; 
			
			for ($x = 0; $x < count($tab); $x++){
				echo '<tbody>'; 
				echo '<tr>'; 
				echo '<td>' . $tab[$x]['id'] . '</td>';
				echo '<td>' . $tab[$x]['nome'] . '</td>';
				echo '<td> <a href="mailto:' . $tab[$x]['email'] . '?subject=Resposta - Lar Betel&body=Olá ' . $tab[$x]['nome'] . ', estamos retornando responder sua/seu '. $tab[$x]['assunto'] .'.">' . $tab[$x]['email']  .'</a> </td>';
				echo '<td>' . $tab[$x]['tele'] . '</td>';  
				echo '<td>' . $tab[$x]['assunto'] . '</td>';  
				echo '<td>' . $tab[$x]['mens'] . '</td>';
				echo '<td> <a href="../Ctrl/contatoLidoC.php?id=' . $tab[$x]['id'] . '"> <input type="button" value="LIDO" class="butt-lido"> </a></td>';
				echo '<td> <a href="../Ctrl/deletarContatoNL.php?id=' . $tab[$x]['id'] . '"> <input type="button" value="EXCLUIR" class="butt-lido"> </a></td>';
				echo '</tr>';
				echo '</tbody>'; 
			}	
			echo '</table>';
		} else {
			echo "Nenhuma mensagem enviada";
		}
	?>

    <h2> Mensagens LIDAS: </h2>
	<?php 
		$tab_Lido = listarContatoLido();

		if ($tab_Lido != 0){
			echo '<table>';
				
			//../View/FuncionarioV.php?ordem=1
			echo '<thead>'; 
			echo '<tr>'; 
			echo '<th> ID </th>';
			echo '<th> NOME </th>';
			echo '<th> EMAIL </th>';
			echo '<th> TELEFONE </th>';
			echo '<th> ASSUNTO </th>';
			echo '<th> MENS </th>';
			echo '<th> NÃO LIDO </th>';
			echo '<th> EXCLUIR </th>';
			echo '</tr>';	
			echo '</thead>'; 
			
			for ($x = 0; $x < count($tab_Lido); $x++){
				echo '<tbody>'; 
				echo '<tr>'; 
				echo '<td>' . $tab_Lido[$x]['id'] . '</td>';
				echo '<td>' . $tab_Lido[$x]['nome'] . '</td>';
				echo '<td> <a href="mailto:' . $tab_Lido[$x]['email'] . '?subject=Resposta - Lar Betel&body=Olá ' . $tab_Lido[$x]['nome'] . ', estamos retornando responder sua/seu '. $tab_Lido[$x]['assunto'] .'.">' . $tab_Lido[$x]['email']  .'</a> </td>';
				echo '<td>' . $tab_Lido[$x]['tele'] . '</td>';
				echo '<td>' . $tab_Lido[$x]['assunto'] . '</td>';
				echo '<td>' . $tab_Lido[$x]['mens'] . '</td>';
				echo '<td> <a href="../Ctrl/contatoNLidoC.php?id=' . $tab_Lido[$x]['id'] . '"> <input type="button" value="NÃO LIDO" class="butt-Nlido"> </a></td>';
				echo '<td> <a href="../Ctrl/deletarContatoL.php?id=' . $tab_Lido[$x]['id'] . '"> <input type="button" value="EXCLUIR" class="butt-lido"> </a></td>';
				echo '</tr>';
				echo '</tbody>'; 
			}	
			echo '</table>';
		} else {

			
			echo "Nenhuma mensagem lida";
		}
	?>
	</div>

</body>
</html>
