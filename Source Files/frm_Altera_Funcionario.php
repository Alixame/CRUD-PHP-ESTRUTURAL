<?php

    $id = $_GET['id'];

    require_once "conexao.php";

    $sql = "SELECT * FROM funcionario WHERE id_funcionario = $id";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);

    $nome_funcionario = $dados['nome_funcionario'];
    $rg_funcionario = $dados['rg_funcionario'];
    $id_funcionario = $dados['id_funcionario'];

?> 



<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Funcionario</title>
</head>
<body>

<form action="alterar_Funcionario.php" method="POST">
<div class="container">
<div class="jumbotron bg-dark text-light mt-3">
    <h1 class="text-center">Alterar Funcionario</h1>
    <label for="id">ID: </label>
        <input class="input-group-text" type="text" id="id" name="id" value="<?php echo $id_funcionario;?>" readonly>
    <br>
        <label for="nome">Nome: </label>
        <input class="input-group-text form-control" type="text" id="nome" name="nome" value="<?php echo $nome_funcionario;?>">
    <br>
        <label for="rg">RG: </label>
        <input class="input-group-text form-control" type="text" id="rg" name="rg" value="<?php echo $rg_funcionario;?>">
    <br>
        <center><input class="btn btn-primary" type="submit" value="Alterar"></center>
</div>
</div>
</form>



</body>
</html>