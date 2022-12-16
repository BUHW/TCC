<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<table align='center' border='2'>
<link rel="stylesheet" href="../style.css">
</html>

<body class="body-cliente">
    
<tr>

        <th class="td-a">Nome</th>
        <th class="td-a">Sobrenome</th>
        <th class="td-a">Data de Cadastro</th>
        <th class="td-a">CPF</th>
        <th class="td-a">Celular</th>
        <th class="td-a">Endereco</th>
        <th class="td-a">Data de Nascimento</th>
        <th class="td-a">Sexo</th>
        <th class="td-a">Rg</th>
        <th class="td-a">Editar</th>
        <th class="td-a">Remover</th>

    </tr>
    
    <?php

include('../conexao.php');
$sql = "Select * from clientes";
$res = mysqli_query($id, $sql);
while ($linha = mysqli_fetch_array($res)) { ?>

    <tr>

        <td class="td-a">
            <?php echo $linha['nome']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['sobrenome']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['dta_cadastro']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['cpf']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['celular']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['endereco']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['data_nasc']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['sexo']; ?>
        </td>
        <td class="td-a">
            <?php echo $linha['rg']; ?>
        </td>

        <td align='center'><a href="form_ed_clientes.php?id_cliente=<?php echo $linha['id_cliente']; ?>">
                <img src="editar (1).png" alt="botão editar">
        </td>

        <td align='center'><a href="excluir_clientes.php?id_cliente=<?php echo $linha['id_cliente']; ?>">
                <img src="botao-excluir (1).png" alt="botão excluir">
        </td>

    <?php } ?>
    </td>

    <a href="http://localhost/ProjetoGob/cadastro/cadastro.php"><input class="btn-calendario" type="button" value="VOLTAR PARA CADASTRO"></a>
    <br>
    <br>
</body>

