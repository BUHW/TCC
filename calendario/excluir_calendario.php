<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Excluir Horário</title>
	<link rel="stylesheet" href="../style.css">
</head>

<br><br><br><br><br><br>
<body align='center' class="body-cl">
	
<?php
include('../Conexao.php');
$pk = $_GET['id_calendario'];

$sql = "Delete from calendario where id_calendario =".$pk;

$res = mysqli_query($id,$sql);

if ($res){
			echo "Registro excluido com sucesso";
		}
		else{
			echo "Erro ao excluir registro";	
		}
?>

<br><td colspan='2' align='center'><a href="lista_calendario.php">
        <input class="btn-calendario" type="button" img="desfazer.png" value="VOLTAR" onClick="JavaScript: window.history.back();">	  
</td> 
</body>
</html>
