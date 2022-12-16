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
$agenda = $_GET['id_agenda'];
$sql = "Select * from agenda where 
id_agenda= $agenda";

$res = mysqli_query($id, $sql);

while ($linha = mysqli_fetch_array($res)) {
?>

	<body class="body-a">
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
			<form class="form-a" method='post' action='update_agenda.php'>

				<table border='1' align='center'>
					<tr>
						<td class="td-a" colspan='2' align='center'> EDIÇÃO DE AGENDA </td>
					</tr>
					</tr>

					<tr>
						<td class="td-a" colspan='2'><input type="hidden" name="id_agenda" value="<?php echo $linha['id_agenda']; ?>">
						</td>
					</tr>
					<tr>
						<td class="td-a">Cliente: </td>
						<td class="td-a">
							<select class="c-a" name="cliente_agenda">
								<?php

								include("../conexao.php");

								$sql    = "Select * FROM clientes";
								$res    = mysqli_query($id, $sql);
								while ($row    = mysqli_fetch_array($res)) {
									echo '<option value="' . $row['id_cliente'] . '">' . $row['nome'] . '</option>';
								}

								?>
							</select>
						</td>

					</tr>

					<tr>
						<td class="td-a">Horário do Serviço: </td>
						<td class="td-a">
							<select class="dh-a" name="calendario_agenda">
							<?php

							include("../conexao.php");

							$sql    = "Select * FROM calendario";
							$res    = mysqli_query($id, $sql);
							while ($row    = mysqli_fetch_array($res)) {
								echo '<option value="' . $row['id_calendario'] . '">' . $row['data_horario'] . '</option>';
							}
						}
							?>
							</select>
						</td>

					</tr>

					<tr>
						<td class="td-a">Hora do horario: </td>
						<td class="td-a">
							<select class="hr-a" name="calendario_agenda">
								<?php

								include("../conexao.php");

								$sql    = "Select * FROM calendario";
								$res    = mysqli_query($id, $sql);
								while ($row    = mysqli_fetch_array($res)) {
									echo '<option value="' . $row['id_calendario'] . '">' . $row['hora'] . '</option>';
								}

								?>
							</select>
						</td>

					</tr>

					<tr>

						<td class="td-a">Serviço de Funcionario: </td>
						<td class="td-a"><select class="sf-a"  name="func_servico_agenda">
								<?php

								include("../conexao.php");

								$sql    = "Select * FROM servico";
								$res    = mysqli_query($id, $sql);
								while ($row  = mysqli_fetch_array($res)) {
									echo '<option value="' . $row['id_servico'] . '">' . $row['nome'] . '</option>';
								}

								?>
							</select>
						</td>

					</tr>




					<tr>
						<td class="td-a">Status: </td>
						<td class="td-a"><input type="radio" name="status_agenda" value="S" /> Ativo<br />
							<input type="radio" name="status_agenda" value="N" /> Não Ativo<br />
						</td>
					</tr>

					<tr>
						<td class="td-a" colspan='2' align='center'>
						
						<input class="btn-a" type='submit' value='EDITAR'> 
					

						<input class="btn-a" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
						
					</td>
					</tr>
				</table>
			</form>
	</body>

</html>