<?php

require_once "conexao.php";

$id_funcionario = $_POST['id'];
$nome_funcionario = $_POST['nome'];
$rg_funcionario = $_POST['rg'];


$sql = "UPDATE funcionario SET nome_funcionario ='$nome_funcionario', rg_funcionario = '$rg_funcionario' WHERE id_funcionario = '$id_funcionario'";

$result = mysqli_query($con,$sql);

if ($result == true) {
    echo "Alterado com Sucesso!<br>
    <a href='listar_Funcionario.php'>Visualizar</a>";
    
}else{
    echo "Erro ao Alterar!<br>
    <a href='listar_Funcionario.php'>Voltar</a>";
}