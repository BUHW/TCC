<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
	
<?php
include("../conexao.php");

$nome = $_POST['nome_clientes'];
$sobrenome = $_POST['sobrenome_clientes'];
$data_cadastro = $_POST['data_cadastro_clientes'];
$cpf = $_POST['cpf_clientes'];
$celular = $_POST['celular_clientes'];
$endereco = $_POST['endereco_clientes'];
$data_nasc = $_POST['data_nasc_clientes'];
$sexo = $_POST['sexo_clientes'];
$rg = $_POST['rg_clientes'];


$sql = "Insert into clientes(nome, sobrenome, dta_cadastro, cpf, celular, endereco, data_nasc, sexo, rg) 
					values(
					'".$nome."',
					'".$sobrenome."',
					'".$data_cadastro."',
					'".$cpf."',
					'".$celular."',
					'".$endereco."',
					'".$data_nasc."',
					'".$sexo."',
					'".$rg."')";
									
$res = mysqli_query($id, $sql);
                  
				  if ($res) {
					  echo "Cadastrado com sucesso";
				  }
				  else {
					  echo "Erro ao cadastrar";
				  }
			   
?>
<br><td colspan='2' align='center'><a href="form_clientes.html.php">
        <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td>
</body>
</html>
