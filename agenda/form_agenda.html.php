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

		
		<form class="form-a" method='post' action='agenda_cadastro.php'>
			<table class="td-ag" border='1' align='center'>

				<tr>
					<td class="td-a" colspan='2' align='center'> CADASTRO DE AGENDA </td>
				</tr>

				<tr class="tr-a">
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
					<td class="td-a">Horario do Serviço: </td>
					<td class="td-a">
						<select class="hr-a" name="calendario_agenda">
							<?php

							include("../conexao.php");

							$sql    = "SELECT * FROM calendario WHERE not EXISTS (Select * from agenda where calendario.id_calendario = agenda.id_calendario)";
							$res    = mysqli_query($id, $sql);
							while ($row    = mysqli_fetch_array($res)) {

								$pega_nome_func = "select nome from funcionarios,func_servico where funcionarios.id_funcionario = func_servico.id_funcionario and func_servico.id_func_servico=".$row['id_func_servico'];
								$nome_fun = mysqli_query($id, $pega_nome_func);
								$funci = mysqli_fetch_array($nome_fun);

								$pega_nome_serv = "select nome from servico,func_servico where servico.id_servico = func_servico.id_servico and func_servico.id_func_servico=".$row['id_func_servico'];
								$nome_serv = mysqli_query($id, $pega_nome_serv);
								$serv = mysqli_fetch_array($nome_serv);
								echo '<option value="' . $row['id_calendario'] . '"> '. $row['hora'].' - '. $row['data_horario']. ' -  '. $serv['nome'].' - '. $funci['nome']. '</option>';
							}

							?>
						</select>
					</td>

				</tr>


				<tr>
					<td class="td-a">Status: </td>
					<td class="td-a">

						<input type="radio" name="status_agenda" value="S" checked /> Ativo<br />
						<input type="radio" name="status_agenda" value="N" /> Não Ativo<br />
					</td>
				</tr>

				<tr>
					<td class="td-a" colspan='2' align='center'><input class="btn-a" type='submit' value='CADASTRAR'>


						<a href="http://localhost/ProjetoGob/agenda/lista_agenda.php"><input class="btn-a-ed" type="button" value="LISTAR"></a>


						<input class="btn-a-vo" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
					</td>
				</tr>

			</table>
		</form>
	</div>
</body>

</html>