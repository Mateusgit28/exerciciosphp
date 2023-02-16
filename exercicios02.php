<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Digite um Caractere: <input type="text" name="carac"><br>
        <button type="submit"> Testar</button>
    </form>
    <?php
    if (isset($_GET['carac'])) {
        $meuCaractere = $_GET['carac'];

        if (ctype_digit($meuCaractere))
            echo "É digito";
        else
            echo "Não é Digito";
    }

    ?>
</body>

</html>