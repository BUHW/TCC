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

<body class="body-s">

	<nav id="menu-s">
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
			<li class="sair-s">
				<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
			</li>
		</ul>
	</nav>
	<br><br>

	<form class='form-s' method='post' action='servico_cadastro.php'>
		<table border='1' align='center'>
			<tr>
				<td class="td-s" colspan='2' align='center'> CADASTRO SERVIÇO </td>
			</tr>

			<tr>
				<td class="td-s">Nome: </td>
				<td class="td-s"><input type='text' name='nome_servico'> </td>
			</tr>

			<tr>
				<td class="td-s">Descrição: </td>
				<td class="td-s"><input type='text' name='descricao_servico'> </td>
			</tr>

			<tr>
				<td class="td-s">Valor: </td>
				<td class="td-s"><input type='text' name='valor_servico'> </td>
			</tr>

			<tr>
				<td class="td-s">Data da inclusão: </td>
				<td class="td-s"><input class="data-i" type='date' name='data_inclusao_servico'> </td>
			</tr>

			<tr>
				<td class="td-s">Duração: </td>
				<td class="td-s"><input type='text' name='duracao_servico'> </td>
			</tr>

			<tr>
				<td class="td-s">Status: </td>
				<td class="td-s"><input checked type="radio" name="status_servico" value="S" /> Ativo<br />
					<input type="radio" name="status_agenda" value="N" /> Não Ativo<br />
				</td>
			</tr>
			
			<tr>
				<td class="td-s" colspan='2' align='center'><input class="btn-s" type='submit' value='CADASTRAR'>

				<a href="http://localhost/ProjetoGob/servico/lista_servico.php"><input class="btn-s" type="button" value="LISTAR"></a>

				<input class="btn-s" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">

				</td>
			</tr>


		</table>
	</form>
</body>

</html>