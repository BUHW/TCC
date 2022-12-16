<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<table align='center' border='2'>
    <link rel="stylesheet" href="../style.css">

</html>

<body class="body-l-s">
    <tr>

        <th class="td-ca">Nome</th>
        <th class="td-ca">Descricao</th>
        <th class="td-ca">Valor</th>
        <th class="td-ca">Data_inclusao</th>
        <th class="td-ca">Status</th>
        <th class="td-ca"> Duracao</th>
        <th class="td-ca">Editar</th>
        <th class="td-ca">Remover</th>

    </tr>
</body>


<?php

include('../conexao.php');
$sql = "Select * from servico";
$res = mysqli_query($id, $sql);
while ($linha = mysqli_fetch_array($res)) { ?>

    <tr>

        <td class="td-ca">
            <?php echo $linha['nome']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['descricao']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['valor']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['data_inclusao']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['status']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['duracao']; ?>
        </td>

        <td align='center'><a href="form_ed_servico.php?id_servico=<?php echo $linha['id_servico']; ?>">
                <img src="editar (1).png" alt="botão editar">
        </td>

        <td align='center'><a href="excluir_servico.php?id_servico=<?php echo $linha['id_servico']; ?>">
                <img src="botao-excluir (1).png" alt="botão excluir">
        </td>

    <?php } ?>
    </td>
    <form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
        <input class="btn-calendario" type="submit"  value="VOLTAR PARA CADASTRO" />
        <br>
        <br>
    </form>