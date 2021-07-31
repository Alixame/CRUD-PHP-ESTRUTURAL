<?php

require_once 'conexao.php';

$nome = $_POST["nome"];
$rg  = $_POST["rg"];

$sql = "insert into funcionario (nome_funcionario,rg_funcionario) values ('$nome','$rg')";

$result = mysqli_query($con,$sql);

if ($result == true) {
    echo "Cadastrado com Sucesso!<br>
    <a href='listar_Funcionario.php'>Visualizar</a>";
    
}else{
    echo "Erro ao cadastrar!<br>
    <a href='listar_Funcionario.php'>Voltar</a>";
}