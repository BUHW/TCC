<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<table aling='center' border='2'>
    <link rel="stylesheet" href="../style.css">

    <body align="center" class="td-l">
<br><br>
<div class="tr-l-a">
	<tr>
            <th class="td-a">Cliente</th>
            <th class="td-a">Horario</th>
			<th class="td-a">Funcionário</th>
			<th class="td-a">Serviço</th>
            <th class="td-a">Status</th>
            <th class="td-a">Editar</th>
            <th class="td-a">Remover</th>
        </tr></div>        

    </body>

    <?php

    include('../conexao.php');
    $sql = "Select * from agenda";
    $res = mysqli_query($id, $sql);
    while ($linha = mysqli_fetch_array($res)) { ?>

        <tr>

		<td class="td-ca">
			<?php 
			$cliente = "SELECT * FROM clientes 
			where id_cliente=".$linha['id_cliente'];
			$cli   = mysqli_query($id, $cliente);
			while ($row = mysqli_fetch_array($cli)) {
			echo $row['nome']; }?>
		</td>
		
		<td class="td-ca">
			<?php 
			$calend = "SELECT * FROM calendario 
			where id_calendario=".$linha['id_calendario'];
			$hora   = mysqli_query($id, $calend);
			while ($row = mysqli_fetch_array($hora)) {
			echo $row['data_horario']."-".$row['hora']; }?>
		</td>
		
		<td class="td-ca">
			<?php 
			$funci = "SELECT nome from funcionarios, agenda, func_servico, calendario 
			where funcionarios.id_funcionario = func_servico.id_funcionario 
			and func_servico.id_func_servico = calendario.id_func_servico 
			and calendario.id_calendario = agenda.id_calendario 
			and agenda.id_agenda =".$linha['id_agenda'];
			$fun   = mysqli_query($id, $funci);
			while ($row = mysqli_fetch_array($fun)) {
			echo $row['nome']; }?>
		</td>
		 <td class="td-ca">
			<?php 
			$serv = "SELECT nome from servico, agenda, func_servico, calendario 
			where servico.id_servico = func_servico.id_servico 
			and func_servico.id_func_servico = calendario.id_func_servico 
			and calendario.id_calendario = agenda.id_calendario 
			and agenda.id_agenda =".$linha['id_agenda'];
			$ser   = mysqli_query($id, $serv);
			while ($row = mysqli_fetch_array($ser)) {
			echo $row['nome']; }?>
		</td>
		
		

		<td class="td-a">
			<?php echo $linha['status']; ?>
		</td>

		<td align='center'><a href="form_ed_agenda.php?id_agenda=<?php echo $linha['id_agenda']; ?>">
				<img src="editar (1).png" alt="botão editar">
		</td>

		<td align='center'><a href="excluir_agenda.php?id_agenda=<?php echo $linha['id_agenda']; ?>">
				<img src="botao-excluir (1).png" alt="botão excluir">
		</td>

        <?php } ?>
        </td>

</html>

<form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
<input class="btn-ag" type="submit" value="VOLTAR PARA CADASTRO" />
</form>