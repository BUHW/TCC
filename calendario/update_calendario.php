<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update calendario</title>
    <link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
   
<?php
include('../conexao.php');

$id_calendario    = $_POST['id_calendario'];
$data_horario     = $_POST['data_horario'];
$hora	          = $_POST['hora'];
	
$sql = "Update calendario set 
data_horario ='$data_horario',
hora ='$hora'
where id_calendario=$id_calendario";	

$res = mysqli_query($id,$sql);

if ($res){
    echo "Alterados com sucesso";
}
else{
echo "Erro ao alterar";
}


?>
</td>
        <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td> 
</body>
</html>
