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

<?php
include('../conexao.php');
$id_func_servico = $_GET['id_func_servico'];
$sql = "Select * from func_servico where 
		id_func_servico = $id_func_servico";

$res = mysqli_query($id, $sql);

while ($linha = mysqli_fetch_array($res)) {
?>

	<body class="body-ca">
		<div id="form-a">

			<nav id="menu-a">
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

					<li class="sair-a">
						<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
					</li>
				</ul>
			</nav>
			<br><br>
			<form class="form-ca" method='post' action='update_func_servico.php'>
				<table border='1' align='center'>
					<tr>
						<td class="td-ca" colspan='2' align='center'> EDIÇÃO DE FENCIONÁRIOS E SERVIÇOS </td>
					</tr>

					<tr>
						<td class="td-ca" colspan='2'><input type="hidden" name="id_func_servico" value="<?php echo $linha['id_func_servico']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Serviço do Funcionário: </td>
						<td class="td-ca">
							<select class="sf-sf" name="id_servico">
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
						<td class="td-ca">Funcionário: </td>
						<td class="td-ca">
							<select class="fs-f"  name="id_funcionario">
							<?php

							include("../conexao.php");

							$sql    = "SELECT * FROM funcionarios";
							$res    = mysqli_query($id, $sql);
							while ($row    = mysqli_fetch_array($res)) {
								echo '<option value="' . $row['id_funcionario'] . '">' . $row['nome'] . '</option>';
							}
						}
							?>
							</select>

						</td>
					</tr>

					<tr>
						<td class="td-ca" colspan='2' align='center'><input class="btn-cli-ed" type='submit' value='ALTERAR'>

						<input class="btn-cli-ed" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
					</td>
					</tr>


				</table>
			</form>
	</body>

</html>