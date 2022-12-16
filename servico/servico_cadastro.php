<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=7, initial-scale=1.0">
	<title>Cadastro de Serviço</title>
	<link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
	
<?php
include("../conexao.php");

$nome = $_POST['nome_servico'];
$descricao = $_POST['descricao_servico'];
$valor = $_POST['valor_servico'];
$data_inclusao = $_POST['data_inclusao_servico'];
$status = $_POST['status_servico'];
$duracao = $_POST['duracao_servico'];

$sql = "Insert into servico(nome, descricao, valor, data_inclusao, status, duracao) 
					values(
					'".$nome."',
					'".$descricao."',
					'".$valor."',
					'".$data_inclusao."',
					'".$status."',
					'".$duracao."')";
									
$res = mysqli_query($id, $sql);
                  
				  if ($res) {
					  echo "Cadastrado com sucesso";
				  }
				  else {
					  echo "Erro ao cadastrar";
				  }
?>
        <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td> 
</body>
</html>
