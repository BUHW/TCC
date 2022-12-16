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
	<body class="body-cl">
	
	<nav id="menu-cli">
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

		<li class="sair-cli">
			<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
		</li>
	</ul>
</nav>
<br><br>

	<form class='form-cli' method='post' action='clientes_cadastro.php'>
			<table border='1' align="center">
				<tr>
					<td class="td-cl" colspan='2' align="center"> CADASTRO DE CLIENTES </td>
				</tr>
				
				<tr>
					<td class="td-cl">Nome: </td>
					<td class="td-cl"> <input type='text' name='nome_clientes'> </td>			
				</tr>
			
				<tr>
					<td class="td-cl">Sobrenome: </td>
					<td class="td-cl"><input type='text' name='sobrenome_clientes'> </td>			
				</tr>
						
				<tr>
					<td class="td-cl">Data de cadastro: </td>
					<td class="td-cl"><input class="data-c-cl" type='date' name='data_cadastro_clientes'> </td>	
				</tr>
				
				<tr>
					<td class="td-cl">CPF: </td>
					<td class="td-cl"><input type='text' name='cpf_clientes'> </td>			
				</tr>
				
				<tr>
					<td class="td-cl">Celular: </td>
					<td class="td-cl"><input type='text' name='celular_clientes'> </td>			
				</tr>
				
				<tr>
					<td class="td-cl">Endereço: </td>
					<td class="td-cl"><input type='text' name='endereco_clientes'> </td>			
				</tr>
				
				<tr>
					<td class="td-cl">Data de nascimento: </td>
					<td class="td-cl"><input class="data-n-cl" type='date' name='data_nasc_clientes'> </td>			
				</tr>
				
				<tr>
					<td class="td-cl">RG: </td>
					<td class="td-cl"><input type='text' name='rg_clientes'> </td>			
				</tr>
				

				<tr>
					<td class="td-cl">Sexo: </td>
					<td class="td-cl"><input checked  type="radio" name="sexo_clientes" value="M"/> Masculino<br /> 
					<input type="radio" name="sexo_clientes" value="F"/> Feminino<br />
					<input type="radio" name="sexo_clientes" value="P"/> Prefiro Não Dizer<br />
				</td>			
				</tr>
				

				
				<tr>
					<td class="td-cl" colspan='2' align='center'>
						
					<input class="btn-cli-c" type='submit' value='CADASTRAR'>
				
					<a href="http://localhost/ProjetoGob/clientes/lista_clientes.php"><input class="btn-cli-ed"  type="button" value="LISTAR"></a> 
                	
                    <input class="btn-cli-vo" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
                </td>
				</tr>
			</table>
		</form>
	</body>
</html>
