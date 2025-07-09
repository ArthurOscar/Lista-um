<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_login">Digite seu usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br>
        <label for="verificar_login">Digite sua senha:</label>
        <input type="password" name="senha" id="senha" required><br>
        <button type="submit" name="verificar_login">Login</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_login'])){
            $senha = $_POST['senha'];
            $usuario = $_POST['usuario'];
            if($senha == 'ABC123' and $usuario == "arthur"){
                echo "Login feito com sucesso";
            } else {
                echo "Usuário ou senha incorreto";
            } 
        }
    }
    ?>
</body>
</html>