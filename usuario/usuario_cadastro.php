<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
	
<?php
include("../conexao.php");

$nome 	= $_POST['usuario_login'];
$email 	= $_POST['email_login'];
$senha 	= md5($_POST['senha_login']);
$tipo 	= $_POST['tipo_login'];

$sql = "
	Insert into usuario 
		(usuario, email, senha, tipo) 
	values
		('$nome','$email','$senha','$tipo');
	";

$res = mysqli_query($id, $sql);

if ($res) {
	echo "Cadastrado com sucesso";
} else {
	echo "Erro ao cadastrar";
}
?>

<form action="http://localhost/ProjetoGob/cadastro/cadastro.php">
	<input class="btn-calendario"  class="btn-calendario"  type="submit" value="IR PARA CADASTRO" />
</form>
</body>
</html>
