<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Horario</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
	
<?php
include("../conexao.php");

$data_horario=$_POST['data_horario_calendario'];
$hora=$_POST['hora_calendario'];
$func_serv = $_POST['id_func_servico'];

$sql = "Insert into calendario(data_horario, hora, id_func_servico) 
					values('".$data_horario."',
							'".$hora."',
						'".$func_serv."')";
											
														
$res= mysqli_query($id, $sql);
                  
				  if($res) {
					  echo "Cadastrado com sucesso";
				  }
				  else{
					  echo "Erro ao cadastrar";
				  }
?>

</td>
<br><td colspan='2' align='center'><a href="form_calendario.html.php">
        <input type="button" class="btn-calendario" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td>
</body>
</html>
