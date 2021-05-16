<?php 
if(isset($_POST['usuario']) && $_POST['usuario'] != ''){
    $user = [];

    $user['usuario'] = $_POST['usuario'];

    if(isset($_POST['senha'])){
        $user['senha'] = $_POST['senha'];
    }else{
        $user['senha'] = '';
    }

    if(isset($_POST['administrador'])){
        $user['administrador'] = $_POST['administrador'];
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

include "index.php";
?>