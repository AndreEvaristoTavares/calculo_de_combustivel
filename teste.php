
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de combustivel</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
$valor_combustivel = $_POST['valor_combustivel'];
$km_por_litro = $_POST['km_por_litro'];
$km_percorrido = $_POST['km_percorrido'];
$total = ($km_percorrido / $km_por_litro) * $valor_combustivel;
if(isset($_POST['ida-volta'])){
    $idaVolta = $total * 2;
    echo "<h2> O valor que você vai gastar de ida/volta é: ".number_format($idaVolta, 2, ',', '.')." R$</h2>";
} else{
    echo "<h2> O valor que você vai gastar é: ".number_format($total, 2, ',', '.')." R$</h2>";
}
?>
</body>
</html>