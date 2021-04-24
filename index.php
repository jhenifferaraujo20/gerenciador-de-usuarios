<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>CADASTRO DE USUÁRIO</h1>
        <form action="">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" maxlenght="20" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" maxlenght="8" required>
            <input type="checkbox" name="administrador" id="administrador" value="sim">
            <label for="administrador">usuário administrador</label>
            <button type="submit">salvar</button>
        </form>
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
</body>
</html>