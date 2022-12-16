<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro do Serviço e Funcionario</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>

<body align='center' class="body-cl">
	<?php
	include("../conexao.php");

	$servico_func = $_POST['servico_func_servico'];
	$funcionario_func = $_POST['funcionario_func_servicoservico'];

	$sql = "Insert into func_servico(id_servico, id_funcionario) 
					values('" . $servico_func . "',
							'" . $funcionario_func . "')";


	$res = mysqli_query($id, $sql);

	if ($res) {
		echo "Cadastrado com sucesso";
	} else {
		echo "Erro ao cadastrar";
	}
	?>
	<br>
	<td colspan='2' align='center'><a href="form_func_servico.html.php">
			<input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">
	</td>
</body>

</html>