<?php

require_once 'conexao.php';


$sql = "select * from funcionario";


$result = mysqli_query($con,$sql);


while($dados = mysqli_fetch_assoc($result)){

    $id = $dados['id_funcionario'];
    $nome = $dados['nome_funcionario'];
    $rg = $dados['rg_funcionario'];

    echo "Id: ".$id."<br>".
         "Nome: ".$nome."<br>".
         "RG: ".$rg."<br>";
    
    echo "<a href='frm_Altera_Funcionario.php?id=$id'>Alterar</a><br>";
    echo "<a href='excluir_Funcionario.php?id=$id'>Excluir</a><br><hr>";
    
}
?>

<a href="frm_Funcionario.html">Formulario de Cadastro de Funcionario</a>
