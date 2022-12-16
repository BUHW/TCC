<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>excluir Clientes</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
	<?php
include('../conexao.php');
$pk = $_GET['id_cliente'];

$sql = "Delete from clientes where id_cliente =".$pk;

$res = mysqli_query($id,$sql);

if ($res){
			echo "Registro excluido com sucesso";
		}
		else{
			echo "Erro ao excluir registro";	
		}
?>

<br><td colspan='2' align='center'><a href="lista_clientes.php">
        <input class="btn-calendario"  type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td> 
</body>
</html>

