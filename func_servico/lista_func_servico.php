<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <table aling='center' border='2'>
    <link rel="stylesheet" href="../style.css">
</html>
<body class="body-l-fs">
    <br>
  <tr>

    <th class="td-ca">Serviço</th>
    <th class="td-ca">Funcionario</th>
    <th class="td-ca">Editar</th>
    <th class="td-ca">Remover</th>

</tr>  
</body>


<?php

    include('../conexao.php');
    $sql = "Select * from func_servico";
    $res = mysqli_query($id,$sql);
    while ($linha = mysqli_fetch_array($res))

{?>

<tr>

    <td class="td-ca">
    <?php 
		$servico = "SELECT * FROM servico where id_servico=".$linha['id_servico'];
		$ser   = mysqli_query($id, $servico);
		while ($row = mysqli_fetch_array($ser)) {
		echo $row['nome']; }?>
	</td>

    </td>
    <td class="td-ca">
    <?php 
		$func = "SELECT * FROM funcionarios 
		where id_funcionario=".$linha['id_funcionario'];
		$fu   = mysqli_query($id, $func);
		while ($fc = mysqli_fetch_array($fu)) {
		echo $fc['nome']; }?>
    </td>

<td align='center'><a href="form_ed_func_servico.php?id_func_servico=<?php echo $linha['id_func_servico']; ?>">
<img src="editar (1).png" alt="botão editar">
</td>

<td align='center'><a href="excluir_func_servico.php?id_func_servico=<?php echo $linha['id_func_servico']; ?>">
<img src="botao-excluir (1).png" alt="botão excluir">
</td>

<?php }?>
</td>
<form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
    <input class="btn-calendario" type="submit" value="VOLTAR PARA CADASTRO" />
    <br>
    <br>
</form>