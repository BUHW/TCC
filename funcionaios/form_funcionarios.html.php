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
	<link rel="stylesheet" href="../style.css">

</head>

<body class="body-f">
	<nav id="menu-f">
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
			<li class="sair-f">
				<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
			</li>
		</ul>
	</nav>
	<br><br>
	<form class='form-f' method='post' action='funcionarios_cadastro.php'>
		<table border='1' align='center'>
			<tr>
				<td class="td-f" colspan='2' align='center'> CADASTRO FUNCIONÁRIOS </td>
			</tr>

			<tr>
				<td class="td-f">Nome: </td>
				<td class="td-f"><input type='text' name='nome_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">CPF: </td>
				<td class="td-f"><input type='text' name='cpf_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">RG: </td>
				<td class="td-f"><input type='text' name='rg_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Sexo: </td>
				<td class="td-f"><input type="radio" checked name="sexo_funcionarios" value="M" /> Masculino<br />
					<input type="radio" name="sexo_funcionarios" value="F" /> Feminino<br />
					<input type="radio" name="sexo_funcionarios" value="P" /> Prefiro Não Dizer<br />
				</td>
			</tr>

			<tr>
				<td class="td-f">Endereço: </td class="td-f">
				<td class="td-s"><input type='text' name='endereco_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Telefone: </td>
				<td class="td-f"><input type='text' name='telefone_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Data De Nascimento: </td>
				<td class="td-f"><input class="f-dn" type='date' name='data_nasc_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Data De Admissão: </td>
				<td class="td-f"><input class="f-da" type='date' name='data_admissao_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Número Da Carteira De Trabalho: </td>
				<td class="td-f"><input class="f-nct" type='text' name='cart_trabalho_n_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Número do PIS: </td>
				<td class="td-f"><input type='text' name='n_pis_funcionarios'> </td>
			</tr>

			<tr>
				<td class="td-f">Estado Civil: </td>
				<td class="td-f">
					<input type="radio" checked name="estado_civil_funcionarios" value="C" /> Casado<br />
					<input type="radio" name="estado_civil_funcionarios" value="S" /> Solteiro<br />
					<input type="radio" name="estado_civil_funcionarios" value="D" /> Divorsiado<br />
					<input type="radio" name="estado_civil_funcionarios" value="V" /> Viuvo<br />

			</tr>

			<tr>
				<td class="td-f" colspan='2' align='center'><input class="btn-f" type='submit' value='CADASTRAR'>

					<a href="http://localhost/ProjetoGob/funcionaios/lista_funcionarios.php"><input class="btn-f" type="button" value="LISTAR"></a>

					<input class="btn-f" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>