<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<table aling='center' border='2'>
<link rel="stylesheet" href="../style.css">
</html>

<body class="body-l-f">
    <tr>

        <th class="td-ca">Nome</th>
        <th class="td-ca">CPF</th>
        <th class="td-ca">RG</th>
        <th class="td-ca">Sexo</th>
        <th class="td-ca">Endereço</th>
        <th class="td-ca">Telefone</th>
        <th class="td-ca">Datada de Nascimento</th>
        <th class="td-ca">Data da Admissão</th>
        <th class="td-ca">Numero da Carteira de trabalho</th>
        <th class="td-ca">Estado Civil</th>
        <th class="td-ca">Numero do pis</th>
        <th class="td-ca">Editar</th>
        <th class="td-ca">Remover</th>

    </tr>
</body>


<?php

include('../conexao.php');
$sql = "Select * from funcionarios";
$res = mysqli_query($id, $sql);
while ($linha = mysqli_fetch_array($res)) { ?>

    <tr>

        <td class="td-ca">
            <?php echo $linha['nome']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['cpf']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['rg']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['sexo']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['endereco']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['telefone']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['data_nasc']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['data_admissao']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['cart_trabalho_n']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['estado_civil']; ?>
        </td>
        <td class="td-ca">
            <?php echo $linha['n_pis']; ?>
        </td>

        <td align='center'><a href="form_ed_funcionarios.php?id_funcionario=<?php echo $linha['id_funcionario']; ?>">
                <img src="editar (1).png" alt="botão editar">
        </td>

        <td align='center'><a href="excluir_funcionarios.php?id_funcionario=<?php echo $linha['id_funcionario']; ?>">
                <img src="botao-excluir (1).png" alt="botão excluir">
        </td>

    <?php } ?>
    </td>
    <form colspan='2' align="center" action="http://localhost/ProjetoGob/cadastro/cadastro.php">
        <input class="btn-l-f" type="submit" value="VOLTAR PARA CADASTRO" />
        <br>
        <br>
    </form>