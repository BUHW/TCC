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
$funcionario = $_GET['id_funcionario'];
$sql = "Select * from funcionarios where 
id_funcionario = $funcionario";

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
			<form class="form-ca" method='post' action='update_funcionarios.php'>
				<table border='1' align='center'>
					<tr>
						<td class="td-ca" colspan='2' align='center'> EDIÇÃO FUNCIONÁRIOS </td>
					</tr>

					<tr>
						<td class="td-ca" colspan='2'><input type="hidden" name="id_funcionario" value="<?php echo $linha['id_funcionario']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Nome: </td>
						<td class="td-ca"><input type='text' name='nome' value="<?php echo $linha['nome']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">CPF: </td>
						<td class="td-ca"><input type='text' name='cpf' value="<?php echo $linha['cpf']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">RG: </td>
						<td class="td-ca"><input type='text' name='rg' value="<?php echo $linha['rg']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Sexo: </td>

						<?php
						if ($linha['sexo'] == "M") { ?>
							<td class="td-ca"><input type="radio" checked name="sexo" value="M" /> Masculino<br />
								<input type="radio" name="sexo" value="F" /> Feminino<br />
								<input type="radio" name="sexo" value="P" /> Prefiro Não Dizer<br /> <?php } ?>

							<?php
							if ($linha['sexo'] == "F") { ?>
							<td class="td-ca"><input type="radio" name="sexo" value="M" /> Masculino<br />
								<input type="radio" checked name="sexo" value="F" /> Feminino<br />
								<input type="radio" name="sexo" value="P" /> Prefiro Não Dizer<br /> <?php } ?>

							<?php
							if ($linha['sexo'] == "P") { ?>
							<td class="td-ca"><input type="radio" name="sexo" value="M" /> Masculino<br />
								<input type="radio" name="sexo" value="F" /> Feminino<br />
								<input type="radio" checked name="sexo" value="P" /> Prefiro Não Dizer<br /> <?php } ?>

							</td>
					</tr>

					<tr>
						<td class="td-ca">Endereço: </td>
						<td class="td-ca"><input type='text' name='endereco' value="<?php echo $linha['endereco']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Telefone: </td>
						<td class="td-ca"><input type='text' name='telefone' value="<?php echo $linha['telefone']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Data De Nascimento: </td>
						<td class="td-ca"><input class="f-dn" type='date' name='data_nasc' value="<?php echo $linha['data_nasc']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Data De Admissão: </td>
						<td class="td-ca"><input class="f-dn" type='date' name='data_admissao' value="<?php echo $linha['data_admissao']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca">Número Da Carteira De Trabalho: </td>
						<td class="td-ca"><input class="f-nct" type='text' name='cart_trabalho_n' value="<?php echo $linha['cart_trabalho_n']; ?>">
						</td>
					</tr>

					<tr>
						<td class="td-ca"> Estado Civil: </td>

						<?php
						if ($linha['estado_civil'] == "C") { ?>
							<td class="td-ca">
								<input type="radio" checked name="estado_civil" value="C" /> Casado<br />
								<input type="radio" name="estado_civil" value="S" /> Solteiro<br />
								<input type="radio" name="estado_civil" value="D" /> Divorciado<br />
								<input type="radio" name="estado_civil" value="V" /> Viuvo<br /> <?php } ?>

							<?php
							if ($linha['estado_civil'] == "S") { ?>
							<td class="td-ca">
								<input type="radio" name="estado_civil" value="C" /> Casado<br />
								<input type="radio" checked name="estado_civil" value="S" /> Solteiro<br />
								<input type="radio" name="estado_civil" value="D" /> Divorciado<br />
								<input type="radio" name="estado_civil" value="V" /> Viuvo<br /> <?php } ?>

							<?php
							if ($linha['estado_civil'] == "D") { ?>
							<td class="td-ca">
								<input type="radio" name="estado_civil" value="C" /> Casado<br />
								<input type="radio" name="estado_civil" value="S" /> Solteiro<br />
								<input type="radio" checked name="estado_civil" value="D" /> Divorciado<br />
								<input type="radio" name="estado_civil" value="V" /> Viuvo<br /> <?php } ?>

							<?php
							if ($linha['estado_civil'] == "V") { ?>
							<td class="td-ca">
								<input type="radio" name="estado_civil" value="C" /> Casado<br />
								<input type="radio" name="estado_civil" value="S" /> Solteiro<br />
								<input type="radio" name="estado_civil" value="D" /> Divorciado<br />
								<input type="radio" checked name="estado_civil" value="V" /> Viuvo<br /> <?php } ?>

							</td>
					</tr>

					<tr>
						<td class="td-ca">Número do PIS: </td>
						<td class="td-ca"><input type='text' name='n_pis' value="<?php echo $linha['n_pis'];
																} ?>">
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