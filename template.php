<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container text-center">
        <img src="./img/user.png" alt="Usuário">
        <h1>CADASTRO DE USUÁRIO</h1>
        <form action="usuarios.php" method="GET">
            <div class="row">
                <div class="col-md-12">
                    <label for="usuario">usuário</label><br>
                    <input type="text" name="usuario" id="usuario" maxlength="20" required>
                </div>
                <div class="col-md-12">
                    <label for="senha">senha</label><br>
                    <input type="password" name="senha" id="senha" maxlength="8" required>
                </div>
                <div class="col-md-12">
                    <input type="checkbox" name="administrador" id="administrador" value="sim">
                    <label for="administrador">usuário administrador</label>
                </div>
            </div>
            <button type="submit">salvar</button>
        </form>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>USUÁRIO</th>
                    <th>ADMINISTRADOR</th>
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
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php echo $user['administrador']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
</body>
</html>