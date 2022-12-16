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
	<body class="body-ca">
	<nav id="menu-ca">
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
			<a href="http://localhost/ProjetoGob/servico/form_servico.html.php">Serviço</a>
		</li>
		
		<li>
			<a href="http://localhost/ProjetoGob/func_servico/form_func_servico.html.php">Serviços Dos Funcionários</a>
		</li>
		
		<li class="sair-ca">
			<a href="http://localhost/ProjetoGob/login/sair.php">SAIR</a>
		</li>
	</ul>
</nav>
<br><br>
<div id="form">
	
	<form class='form-ca' method='post' action='calendario_cadastro.php'>

			<table border='1' align='center'>

	
				<tr>
					<td class="td-ca" colspan='2' align='center'> CADASTRO DE HORÁRIO </td>
				</tr>
				
				<tr>
					<td class="td-ca">Data do Horário: </td>
					<td class="td-s"><input class="data" type='date' name='data_horario_calendario'> </td>			
				</tr>
			
				<tr>
					<td class="td-ca">Hora: </td>
					<td class="td-s"><input type='text' name='hora_calendario'> </td>			
				</tr>
				
				<tr>

					<td class="td-a">Serviço e  Funcionário: </td>
					<td class="td-a">
						<select class="sf-a" name="id_func_servico">
							<?php

							include("../conexao.php");

							$sql    = "Select * FROM func_servico";
							$res    = mysqli_query($id, $sql);
							while ($row  = mysqli_fetch_array($res)) {
								$pega_nome_func = "Select nome from funcionarios where id_funcionario = ".$row['id_funcionario'];
								$nome_fun = mysqli_query($id, $pega_nome_func);
								$funci = mysqli_fetch_array($nome_fun);

								$pega_nome_serv = "Select nome from servico where id_servico = ".$row['id_servico'];
								$nome_serv = mysqli_query($id, $pega_nome_serv);
								$serv = mysqli_fetch_array($nome_serv);

								

								echo '<option value="' . $row['id_func_servico'] . '"> '. $serv['nome'].' - '. $funci['nome']. '</option>';
							}

							?>
						</select>
					</td>

				</tr>


					<td class="td-ca" colspan='2' align='center'><input class="btn-ca" type='submit' value='CADASTRAR'> 

					<a href="http://localhost/ProjetoGob/calendario/lista_calendario.php"><input class="btn-ca-ed" type="button" value="LISTAR"></a> 
                	
                    <input class="btn-ca-vo" type="button" value="VOLTAR" onClick="JavaScript: window.history.back();">
				</td>
</tr>
				
			</table>

		</form>
</div>
	</body>
</html>