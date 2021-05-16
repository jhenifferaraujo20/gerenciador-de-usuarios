<?php 

$id = $_GET['id'];

include "conexao.php";
$sqlBuscar = "SELECT * FROM tb_usuarios WHERE id={$id};";

$listaDeUsuarios = mysqli_query($conexao , $sqlBuscar);

$usuario = $senha = $administrador = "";

while($user = mysqli_fetch_assoc($listaDeUsuarios)){
    $usuario = $user['usuario'];
    $senha = $user['senha'];
    $administrador = $user['administrador'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="./img/user.png" alt="Usuário">
            <h1>CADASTRO DE USUÁRIO</h1>
        </div>
        <form action="alterar.php" method="POST">
        <input name="id" type="hidden" value="<?php echo $id;?>">
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4">
                    <label for="usuario" class="form-label">USUÁRIO</label><br>
                    <input type="text" name="usuario" id="usuario" class="form-control" maxlength="20" value="<?php echo $usuario;?>" required>
                </div>
        
                <div class="col-md-4">
                    <label for="senha" class="form-label">SENHA</label><br>
                    <input type="password" name="senha" id="senha" class="form-control" maxlength="8" value="<?php echo $senha;?>" required>
                </div>
            </div>
            <div class="row mb-2 justify-content-evenly">
                <div class="col-md-8">
                    <input type="checkbox" name="administrador" id="administrador" value="sim">
                    <label for="administrador">Usuário administrador</label>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-3">
                    <button type="submit" class="btn btn-dark">SALVAR</button>
                </div>
            </div>
        </form>
    </div>
    <script src="bootstrp-5/bootstrap.bundle.js"></script>
</body>
</html>