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
        <form action="usuarios.php" method="POST">
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4">
                    <label for="usuario" class="form-label">USUÁRIO</label><br>
                    <input type="text" name="usuario" id="usuario" class="form-control" maxlength="20" required>
                </div>
        
                <div class="col-md-4">
                    <label for="senha" class="form-label">SENHA</label><br>
                    <input type="password" name="senha" id="senha" class="form-control" maxlength="8" required>
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

    <div class="container mt-5 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUÁRIO</th>
                    <th>ADMINISTRADOR</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sqlBusca = "SELECT * FROM tb_usuarios"; 
                    $resultado = mysqli_query($conexao , $sqlBusca);

                    $listaUsuarios = [];

                   while($user = mysqli_fetch_assoc($resultado)) {
                       $listaUsuarios[] = $user;
                   } 

                   foreach($listaUsuarios as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php echo $user['administrador']; ?></td>
                        <?php echo "<td><a href='alterar-formulario.php?id={$user['id']}' class='btn btn-success'>Alterar</a> "; ?>
                        <?php echo "<a href='excluir.php?id={$user['id']}' class='btn btn-danger'>Excluir</a></td>"; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>

    <script src="bootstrp-5/bootstrap.bundle.js"></script>
</body>
</html>