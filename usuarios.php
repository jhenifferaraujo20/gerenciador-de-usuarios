<?php 
if(isset($_GET['usuario']) && $_GET['usuario'] != ''){
    $user = [];

    $user['usuario'] = $_GET['usuario'];

    if(isset($_GET['senha'])){
        $user['senha'] = $_GET['senha'];
    }else{
        $user['senha'] = '';
    }

    if(isset($_GET['administrador'])){
        $user['administrador'] = $_GET['administrador'];
    }else{
        $user['administrador'] = 'não';
    }
}

include "conexao.php";

if(isset($user)){
    $sqlInserir = "INSERT INTO tb_usuarios(usuario, senha, administrador
    ) VALUES(
        '{$user['usuario']}',
        '{$user['senha']}',
        '{$user['administrador']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "template.php";
?>