<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Adenda</title>
	<link rel="stylesheet" href="../style.css">
</head>

<br><br><br><br><br><br>
<body align='center' class="body-cl">

	<?php
	include("../conexao.php");

	$status 	= $_POST['status_agenda'];
	$cliente    = $_POST['cliente_agenda'];
	$calendario = $_POST['calendario_agenda'];

	$sql = "Insert into agenda(status, id_cliente, id_calendario) 
					values('" . $status . "',
							'" . $cliente . "',
							'" . $calendario . "')";


	$res = mysqli_query($id, $sql);

	if ($res) {
		echo "Cadastrado com sucesso";
	} else {
		echo "Erro ao cadastrar";
	}
	?>
	</td>
	<br>
	<td colspan='2' align='center'><a href="form_agenda.html.php">
			<input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">
	</td>
</body>

</html>