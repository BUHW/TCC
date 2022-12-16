<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cliente</title>
    <link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>
<body align='center' class="body-cl">
    
<?php
include('../conexao.php');

$id_cliente   = $_POST['id_cliente'];
$nome         = $_POST['nome'];
$sobrenome	  = $_POST['sobrenome'];
$dta_cadastro = $_POST['dta_cadastro'];
$cpf          = $_POST['cpf'];
$celular	  = $_POST['celular'];
$endereco	  = $_POST['endereco'];
$data_nasc    = $_POST['data_nasc'];
$sexo	      = $_POST['sexo'];
$rg           = $_POST['rg'];

	
$sql = "Update clientes set 
nome         ='$nome',
sobrenome    ='$sobrenome',
dta_cadastro ='$dta_cadastro',
cpf          ='$cpf',
celular      ='$celular',
endereco     ='$endereco',
data_nasc    ='$data_nasc',
sexo         ='$sexo',
rg           ='$rg'
where id_cliente=$id_cliente";	

$res = mysqli_query($id,$sql);

if ($res){
    echo "Alterados com sucesso";
}
else{
echo "Erro ao alterar";
}


?>
</td>

    </br> <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td>
</body>
</html>

