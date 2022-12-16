<?php
include('../conexao.php');

session_start();

$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

if(!$email || !$senha)
{
	echo "Você deve digitar sua senha e login!";
	exit;
}


$SQL = "SELECT id_usuario, usuario, email, senha, tipo
FROM usuario
WHERE email = '".$email."'";
$result_id = mysqli_query($id, $SQL) or die("Erro no banco de dados!");
$total = mysqli_num_rows($result_id);


if($total)
{
	$dados = mysqli_fetch_array($result_id);


	if(!strcmp($senha, $dados["senha"]))
	{

		$_SESSION["id_usuario"]= $dados["id_usuario"];
		$_SESSION["usuario"] = stripslashes($dados["usuario"]);
		$_SESSION["email"]= $dados["email"];
		$_SESSION["tipo"]= $dados["tipo"];
		header("Location: ../cadastro/cadastro.php");
		exit;
	}	
	
	else
	{
	 "Senha inválida!";
	exit;
	}
}

else
{
	echo "O login fornecido por você é inexistente!";
	
	exit;
}
?>
