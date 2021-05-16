<?php
include "conexao.php";

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$administrador = $_POST['administrador'];

$sqlAlterar = "UPDATE tb_usuarios SET 
                usuario = '{$usuario}' , 
                senha = '{$senha}' , 
                administrador = '{$administrador}' 
                WHERE id = {$id}";

$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='usuarios.php'>Voltar</a>";
}else{
    echo "Ocorreu algum erro";
}

?>