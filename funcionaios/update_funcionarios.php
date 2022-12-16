<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Funcionarios</title>
    <link rel="stylesheet" href="../style.css">
</head>

<br><br><br><br><br><br>
<body align='center' class="body-cl">

    <?php
    include('../conexao.php');

    $id_funcionario  = $_POST['id_funcionario'];
    $nome            = $_POST['nome'];
    $cpf             = $_POST['cpf'];
    $rg              = $_POST['rg'];
    $sexo            = $_POST['sexo'];
    $endereco         = $_POST['endereco'];
    $telefone         = $_POST['telefone'];
    $data_nasc       = $_POST['data_nasc'];
    $data_admissao   = $_POST['data_admissao'];
    $cart_trabalho_n = $_POST['cart_trabalho_n'];
    $estado_civil    = $_POST['estado_civil'];
    $n_pis           = $_POST['n_pis'];


    $sql = "Update funcionarios set 
nome            ='$nome',
cpf             ='$cpf',
rg              ='$rg',
sexo            ='$sexo',
endereco        ='$endereco',
telefone        ='$telefone',
data_nasc       ='$data_nasc',
data_admissao   ='$data_admissao',
cart_trabalho_n ='$cart_trabalho_n',
estado_civil    ='$estado_civil',
n_pis           ='$n_pis'

where id_funcionario=$id_funcionario";

    $res = mysqli_query($id, $sql);

    if ($res) {
        echo "Alterados com sucesso";
    } else {
        echo "Erro ao alterar";
    }


    ?>
    </td>
    <br>
    <input class="btn-calendario" type="button" img="desfazer.png" value="voltar" onClick="JavaScript: window.history.back();">
    </td>
</body>

</html>