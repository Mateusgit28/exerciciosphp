
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
    Nota 1: <input type="text" name="num1"><br>
    Nota 2: <input type="text" name="num2"><br>
    Nota 3: <input type="text" name="num3"><br>
    <button tyoe ="submit">calcular</button>

</form>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$media= ($num1 + $num2 + $num3) / 3;

echo "média: $media";
?>

<?php /* Faça um script que peça 3 notas de um aluno e mostra sua média */ ?>
    
</body>
</html>
