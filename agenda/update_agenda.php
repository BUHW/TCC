<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Agenda</title>
    <link rel="stylesheet" href="../style.css">
</head>

<br><br><br><br><br><br>
<body align='center' class="body-cl">
    <?php
include('../conexao.php');

$id_agenda   = $_POST['id_agenda'];
$status 	= $_POST['status_agenda'];
$cliente    = $_POST['cliente_agenda'];
$calendario = $_POST['calendario_agenda'];
$func_serv  = $_POST['func_servico_agenda'];
	
$sql = "Update agenda set 
status= '".$status."',
id_cliente=$cliente,
id_calendario=$calendario 
where id_agenda=$id_agenda";	

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

