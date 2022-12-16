<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <table aling='center' border='2'>
    
</html>

<tr>

    <th>Usuario</th>
    <th>E-mail</th>
    <th>Senha</th>
    <th>Tipo</th>
    <th>Editar</th>
    <th>Remover</th>

</tr>

<?php

    include('../conexao.php');
    $sql = "Select * from usuario";
    $res = mysqli_query($id,$sql);
    while ($linha = mysqli_fetch_array($res))

{?>

<tr>

    <td>
        <?php echo $linha['usuario'];?>
    </td>
    <td>
        <?php echo $linha['email'];?>
    </td>
    <td>
        <?php echo $linha['senha'];?>
    </td>
    <td>
        <?php echo $linha['tipo'];?>
    </td>

<td align='center'><a href="form_ed_usuario.php?id_usuario=<?php echo $linha['id_usuario']; ?>">
<img src="editar (1).png" alt="botão editar">
</td>

<td align='center'><a href="excluir_usuario.php?id_usuario=<?php echo $linha['id_usuario']; ?>">
<img src="botao-excluir (1).png" alt="botão excluir">
</td>

<?php }?>
</td>
<form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
    <input type="submit" value="VOLTAR PARA CADASTRO" />
    <br>
    <br>
</form>