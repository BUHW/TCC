<?php
include('../login/verifica.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gestaoonlinedebarbearia.com</title>
	<link rel="shortcut icon" href="favicon-400.ico" type="image/x-icon">
	<link rel="stylesheet" href="../style.css">

</head>

<body class="body-fs">

	<nav id="menu-fs">
		<ul>

			<li>
				<a href="http://localhost/ProjetoGob/cadastro/cadastro.php">Home</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/calendario/form_calendario.html.php">Horário</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/agenda/form_agenda.html.php">Agenda</a>
			</li>

			<li>
				<a href=http://localhost/ProjetoGob/funcionaios/form_funcionarios.html.php>Funcionários</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/clientes/form_clientes.html.php">Clientes</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/servico/form_servico.html.php">Serviços</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/func_servico/form_func_servico.html.php">Serviços Dos Funcionários</a>
			</li>

			<li class="sair-fs">
				<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
			</li>
		</ul>
	</nav>
	<br><br>

	<form class="form-fs" method='post' action='func_servico_cadastro.php'>
		<table border='1' align='center'>
			
		    <tr>
				<td class="td-fs" colspan='2' align='center'> CADASTRO DE FENCIONÁRIOS E SERVIÇOS </td>
			</tr>

			<tr>
				<td class="td-fs">Serviço do Funcionário: </td>
				<td class="td-fs">
					<select class="sf-sf" name="servico_func_servico">
						<?php

						include("../conexao.php");

						$sql    = "SELECT * FROM servico";
						$res    = mysqli_query($id, $sql);
						while ($row    = mysqli_fetch_array($res)) {
							echo '<option value="' . $row['id_servico'] . '">' . $row['nome'] . '</option>';
						}

						?>
					</select>

				</td>
			</tr>

			<tr>
				<td class="td-fs">Funcionário: </td>
				<td class="td-fs">
					<select class="sf-sf" name="funcionario_func_servicoservico">
						<?php

						include("../conexao.php");

						$sql    = "SELECT * FROM funcionarios";
						$res    = mysqli_query($id, $sql);
						while ($row    = mysqli_fetch_array($res)) {
							echo '<option value="' . $row['id_funcionario'] . '">' . $row['nome'] . '</option>';
						}

						?>
					</select>

				</td>
			</tr>

			<tr>
				<td class="td-fs" colspan='2' align='center'>

					<input class="btn-fs" type='submit' value='CADASTRAR'>

					<a href="http://localhost/ProjetoGob/func_servico/lista_func_servico.php"><input class="btn-fs" type="button" value="LISTAR"></a>

					<input class="btn-fs" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
					</td>
			</tr>


		</table>
	</form>
</body>

</html>