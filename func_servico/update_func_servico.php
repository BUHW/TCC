<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Serviço Do Usuario</title>
    <link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
<?php
include('../conexao.php');

$id_func_servico= $_POST['id_func_servico'];
$id_servico     = $_POST['id_servico'];
$id_funcionario = $_POST['id_funcionario'];
	
$sql = "Update func_servico set 
id_servico= $id_servico, 
id_funcionario=$id_funcionario
where id_func_servico=$id_func_servico";	

$res = mysqli_query($id,$sql);

if ($res){
    echo "Alterados com sucesso";
}
else{
echo "Erro ao alterar";
}

?>
<br>
        <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td>
</body>
</html>

