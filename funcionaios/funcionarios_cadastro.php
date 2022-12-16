<!DOCTYPE html>
<html lang="py-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Funcionario</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">

	<?php
	include("../conexao.php");

	$nome = $_POST['nome_funcionarios'];
	$cpf = $_POST['cpf_funcionarios'];
	$rg = $_POST['rg_funcionarios'];
	$sexo = $_POST['sexo_funcionarios'];
	$endereco = $_POST['endereco_funcionarios'];
	$telefone = $_POST['telefone_funcionarios'];
	$data_nasc = $_POST['data_nasc_funcionarios'];
	$data_admissao = $_POST['data_admissao_funcionarios'];
	$cart_trabalho = $_POST['cart_trabalho_n_funcionarios'];
	$estado_civil = $_POST['estado_civil_funcionarios'];
	$n_pis = $_POST['n_pis_funcionarios'];


	$sql = "Insert into funcionarios(nome, cpf, rg, sexo, endereco, telefone, data_nasc, data_admissao, cart_trabalho_n, estado_civil, n_pis) 
					values(
					'" . $nome . "',
					'" . $cpf . "',
					'" . $rg . "',
					'" . $sexo . "',
					'" . $endereco . "',
					'" . $telefone . "',
					'" . $data_nasc . "',
					'" . $data_admissao . "',
					'" . $cart_trabalho . "',
					'" . $estado_civil . "',
					'" . $n_pis . "')";



	$res = mysqli_query($id, $sql);

	if ($res) {
		echo "Cadastrado com sucesso";
	} else {
		echo "Erro ao cadastrar";
	}
	?>
	<br>
	<td colspan='2' align='center'><a href="form_funcionarios.html.php">
			<input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">
	</td>
</body>

</html>