<?php

require_once 'conexao.php';


$id = $_GET['id'];


$sql = "DELETE FROM funcionario WHERE id_funcionario = '$id'";


$result = mysqli_query($con,$sql);

if ($result == true) {
    echo "Excluido com Sucesso!<br>
    <a href='listar_Funcionario.php'>Visualizar</a>";
    
}else{
    echo "Erro ao Excluir!<br>
    <a href='listar_Funcionario.php'>Voltar</a>";
}