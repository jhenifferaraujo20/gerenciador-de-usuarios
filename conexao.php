<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'bd_usuarios';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não conectou</h2>!!! Erro: " . mysqli_connect_error());
}

?>