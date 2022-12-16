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

<body class="body-u">

	<nav id="menu_u">
		<ul>

			<li>
				<a href="http://localhost/ProjetoGob/cadastro/cadastro.php">Home</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/calendario/form_calendario.html.php">Horario</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/agenda/form_agenda.html.php">Agenda</a>
			</li>

			<li>
				<a href=http://localhost/ProjetoGob/funcionaios/form_funcionarios.html.php>Funcionarios</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/clientes/form_clientes.html.php">Clientes</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/servico/form_servico.html.php">Serviço</a>
			</li>

			<li>
				<a href="http://localhost/ProjetoGob/func_servico/form_func_servico.html.php">Serviços Dos Funcionarios</a>
			</li>
			<li class="sair_u">
				<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
			</li>

		</ul>
	</nav>

	<br><br>

	<form class="form_u" method='post' action='usuario_cadastro.php'>
		<table border='1' align='center'>
			<tr>
				<td class="td-u" colspan='2' align='center'> NOVO USUÁRIO </td>
			</tr>

			<tr>
				<td class="td-u">Nome: </td>
				<td class="td-u"><input class="td-usu" type='text' name='usuario_login'> </td>
			</tr>

			<tr>
				<td class="td-u">Login: </td>
				<td class="td-u"><input class="n-u" type='text' name='email_login'> </td>
			</tr>

			<tr>
				<td class="td-u">Senha: </td>
				<td class="td-u"><input class="td-usu" type='password' name='senha_login'> </td>
			</tr>

			<tr>
				<td class="td-u">Tipo: </td>
				<td class="td-u"><input class="td-usu" type='text' name='tipo_login'> </td>
			</tr>


			<td class="td-u" action="http://localhost/ProjetoGob/cadastro/cadastro.php" colspan='2' align='center'>
				
				<input class="btn-u" type="submit" value="CADASTRAR">

				<input class="btn-u" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
			</td>
			</tr>



		</table>
	</form>
</body>

</html>