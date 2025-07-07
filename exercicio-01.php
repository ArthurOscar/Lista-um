<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_par_impar">Verifique se é impar ou par:</label>
        <input type="number" id="numero_par_impar" name="numero_par_impar" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_par_impar'])){
            $numero = $_POST['numero_par_impar'];
            $ehpar = true;
            $ehimpar = true;
            if($numero % 2 === 0){
                $ehimpar = false;
            } else {
                $ehpar = false;
            }
            echo "O número $numero é ". ($ehpar ? 'par':'impar');
        }
    }

    ?>
</body>
</html>