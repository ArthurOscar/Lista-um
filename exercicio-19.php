<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar senha</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_senha">Digite sua senha:</label>
        <input type="text" name="senha" id="senha" required><br>
        <button type="submit" name="verificar_senha">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_senha'])){
            $senha = $_POST['senha'];
            $length = strlen($senha);
            $numeros = 0;
            $letras = 0;
            if($length < 8){
                echo "A senha não é segura, por conter menos de 8 caracteres";
            } else {
                for($i = 0; $i <= $length; $i++){
                    if(is_numeric($senha[$i])){
                        $numeros = $numeros + 1;
                    }
                    if(ctype_alpha($senha[$i])){
                        $letras = $letras + 1;
                    }
                }
                if($numeros > 0 and $letras > 0){
                    echo "A senha é segura";
                } else if($numeros > 0 and $letras == 0){
                    echo "A senha não é segura, pela falta de letras";
                } else {
                    echo "A senha não é segura, pela falta de números";
                }
            }
        }
    }
    ?>
</body>
</html>