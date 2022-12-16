<?php
include('../Conexao.php');
$pk = $_GET['id_usuario'];

$sql = "Delete from usuario where id_usuario =".$pk;

$res = mysqli_query($id,$sql);

if ($res){
			echo "Registro excluido com sucesso";
		}
		else{
			echo "Erro ao excluir registro";	
		}
?>

<br><td colspan='2' align='center'><a href="lista_usuario.php">
        <input type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">	  
</td> 