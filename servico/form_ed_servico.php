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
$servico = $_GET['id_servico'];
$sql = "Select * from servico where 
		id_servico = $servico";

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
						<a href="http://localhost/ProjetoGob/func_servico/form_func_servico.html.php">Serviços Dos Funcion´srios</a>
					</li>

					<li class="sair-a">
						<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
					</li>
				</ul>
			</nav>
			<br><br>
			<form class="form-ca" method='post' action='update_servico.php'>
				<table border='1' align='center'>
					<tr>
						<td class="td-ca" colspan='2' align='center'> EDIÇÃO SERVIÇO </td>
					</tr>

					<tr>
						<td class="td-ca" colspan='2'><input type="hidden" name="id_servico" value="<?php echo $linha['id_servico']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Nome do Serviço: </td>
						<td class="td-ca"><input class="n-s-ed" type='text' name='nome' value="<?php echo $linha['nome']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Descrição: </td>
						<td class="td-ca"><input type='text' name='descricao' value="<?php echo $linha['descricao']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Valor: </td>
						<td class="td-ca"><input type='text' name='valor' value="<?php echo $linha['valor']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Data da inclusão: </td>
						<td class="td-ca"><input class="data-i" type='date' name='data_inclusao' value="<?php echo $linha['data_inclusao']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Status: </td>
						<?php
						if ($linha['status'] == "S") { ?>
							<td class="td-ca">
								<input type="radio" checked name="status" value="S" /> Ativo<br />
								<input type="radio" name="status" value="N" /> Não Ativo<br />
							<?php } ?>

							<?php
							if ($linha['status'] == "N") { ?>
							<td class="td-ca">
								<input type="radio" name="status" value="S" /> Ativo<br />
								<input type="radio" checked name="status" value="N" /> Não Ativo<br />
							<?php } ?>
					</tr>

					<tr>
						<td class="td-ca">Duração: </td>
						<td class="td-ca"><input type='text' name='duracao' value="<?php echo $linha['duracao'];
																				} ?>">
						</td>
					</tr>
					<tr>
						<td class="td-ca" colspan='2' align='center'>
							
						<input class="btn-cli-ed" type='submit' value='ALTERAR'>
						
						<input class="btn-cli-ed" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
					</td>
					</tr>



				</table>
			</form>
	</body>

</html>