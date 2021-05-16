<?php 

include "conexao.php";

$id_usuario = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_usuarios WHERE id = {$id_usuario}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    echo "Excluído com sucesso <br>";
    echo "<a href='usuarios.php'>Voltar</a>";
}else{
    echo "Ocorreu algum problema";
}
?>