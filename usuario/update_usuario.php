<?php
include('../conexao.php');

$id_usuario = $_POST['id_usuario'];
$usuario    = $_POST['usuario'];
$email	    = $_POST['email'];
$senha      = $_POST['senha'];
$tipo       = $_POST['tipo'];


	
$sql = "Update usuario set 
usuario ='$usuario',
email   ='$email',
senha   ='$senha',
tipo    ='$tipo'

where id_usuario=$id_usuario";	

$res = mysqli_query($id,$sql);

if ($res){
    echo "Alterados com sucesso";
}
else{
echo "Erro ao alterar";
}


?>
</td>
<br>
        <input type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td>