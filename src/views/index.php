<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captação de Email</title>
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>
<body>
    <form id="formulario" action="../../cadastro.php" method="POST">
        Nome <input type="text" name="nome" id="nome"><br>
        Email <input type="text" name="email" id="email"><br>
        Senha <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Enviar">
        <div id="erros"></div>
    </form>
    <div id="msgCadastroRealizado">
        <p>Cadastro realizado com sucesso!</p>
    </div>
    <script src="../../public/scripts/jquery-3.4.1.min.js"></script>
    <script src="../../public/scripts/jquery.validate.min.js"></script>
    <script src="../../public/scripts/form.js"></script>
</body>
</html>