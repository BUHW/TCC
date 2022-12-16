<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <table border='1' align='center'>
    <link rel="stylesheet" href="../style.css">
</html>
<body class="body-l-ca">
    
  <tr>

    <th class="td-ca">Data Do Horário</th>
    <th class="td-ca">hora</th>
    <th class="td-ca">Editar</th>
    <th class="td-ca">Remover</th>

</tr>  
</body>


<?php

    include('../conexao.php');
    $sql = "Select * from calendario";
    $res = mysqli_query($id,$sql);
    while ($linha = mysqli_fetch_array($res)){
?>

<tr>

    <td class="td-ca">
        <?php echo $linha['data_horario'];
        ?>
    </td>
    <td class="td-ca">
        <?php echo $linha['hora'];
        ?>
    </td>

<td align='center'><a href="form_ed_calendario.php?id_calendario=<?php echo $linha['id_calendario']; ?>">
<img src="editar (1).png" alt="botão editar">
</td>

<td align='center'><a href="excluir_calendario.php?id_calendario=<?php echo $linha['id_calendario']; ?>">
<img src="botao-excluir (1).png" alt="botão excluir">
</td>

<?php }?>
</td>
<form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
    <input class="btn-calendario" type="submit" value="VOLTAR PARA CADASTRO" />
    <br>
    <br>
</form>
