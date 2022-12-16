<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>gestaoonlinedebarbearia.com</title>
		<link rel="shortcut icon" href="favicon-400.ico" type="image/x-icon">
	</head>
		
	<?php
		include('../conexao.php');
		$usuario = $_GET['id_usuario'];
		$sql = "Select * from usuario where 
		id_usuario = $usuario";

		$res = mysqli_query($id,$sql);

		while ($linha = mysqli_fetch_array($res)){
	?>

	<body>
		<h1 align='center'>GESTÃO ONLINE DE BARBEARIAS</h1> 
			<form method='post' action='update_usuario.php'>
				<table border='1' align='center'>
					<tr>
						<td colspan='2' align='center'> CADASTRO DE LOGIN </td>
					</tr>
				
					<tr>
					<td colspan='2'><input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario'];?>"> 
					</td> 
					</tr>	

					<tr>
						<td>Nome de Usuario: </td>
						<td><input type='text' name='usuario'
						value="<?php echo $linha['usuario'];?>"> 
					</td>			
					</tr>
					
					<tr>
						<td>Email: </td>
						<td><input type='text' name='email'
						value="<?php echo $linha['email'];?>"> 
					</td>			
					</tr>
			
					<tr>
						<td>Senha: </td>
						<td><input type='text' name='senha'
						value="<?php echo $linha['senha'];?>"> 
					</td>			
					</tr>
				
					<tr>
						<td>tipo: </td>
						<td><input type='text' name='tipo'
						value="<?php echo $linha['tipo'];}?>"> 
					</td>			
					</tr>
				
					<tr>
						<td colspan='2' align='center'><input type='submit' value='Atualizar'> </td>
					</tr>
				
                <td colspan='2' align='center'>
                    <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
				</td>

				</table>
			</form>
		</body>
</html>