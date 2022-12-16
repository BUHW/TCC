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
$calendario = $_GET['id_calendario'];
$sql = "Select * from calendario where 
id_calendario= $calendario";

$res = mysqli_query($id,$sql);
while ($linha = mysqli_fetch_array($res)){
?>
	
	<body class="body-ca">
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

		<form class="form-ca" method='post' action='update_calendario.php'>
			<table border='1' align='center'>
				<tr>
					<td class="td-ca" colspan='2' align='center'> EDIÇÃO DE HORÁRIO </td>
				</tr>
				<tr>
				<td class="td-ca" colspan='2'><input type="hidden" name="id_calendario" value="<?php echo $linha['id_calendario'];?>"> 
			</td>
				</tr>

				<tr>
					<td class="td-ca">Data do Horário: </td>
					<td class="td-ca"><input class="r" type='date' name='data_horario' 
					value="<?php echo $linha['data_horario'];?>">
				</td>			
				</tr>
			
				<tr>
					<td class="td-ca">Hora: </td>
					<td class="td-ca"><input  type='text' name='hora'
					value="<?php echo $linha['hora'];}?>">
				</td>			
				</tr>

				
				<tr>
				<td class="td-ca" colspan='2' align='center'> <input class="btn-ca"  type = 'submit' value = 'ALTERAR'> 

                    <input  type="submit" class="btn-ca" value="VOLTAR" onClick="JavaScript: window.history.back();">
				</td>
				</tr>
			

				
			</table>
		</form>
	</body>
</html>
