<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="sstylesheet" href="css/styles.css">
</head>
<body>
    <div class="container text-center">
        <h1>CADASTRO DE USUÁRIO</h1>
        <form action="usuarios.php" method="GET">
            <div class="row">
                <div class="col-md-6">
                    <label for="usuario">Usuário</label><br>
                    <input type="text" name="usuario" id="usuario" maxlenght="20" required>
                </div>
                <div class="col-md-6">
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha" maxlenght="8" required>
                </div>
                <div class="col-md-12">
                    <input type="checkbox" name="administrador" id="administrador" value="sim">
                    <label for="administrador">usuário administrador</label>
                </div>
            </div>
            <button type="submit">salvar</button>
        </form>

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