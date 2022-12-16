<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Serviço</title>
    <link rel="stylesheet" href="../style.css">
</head>
<br><br><br><br><br><br>

<body align='center' class="body-cl">

    <?php
    include('../conexao.php');

    $id_servico    = $_POST['id_servico'];
    $nome          = $_POST['nome'];
    $descricao       = $_POST['descricao'];
    $valor         = $_POST['valor'];
    $data_inclusao = $_POST['data_inclusao'];
    $status           = $_POST['status'];
    $duracao       = $_POST['duracao'];


    $sql = "Update servico set 
nome          ='$nome',
descricao     ='$descricao',
valor         ='$valor',
data_inclusao ='$data_inclusao',
status        ='$status',
duracao       ='$duracao'

where id_servico=$id_servico";

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