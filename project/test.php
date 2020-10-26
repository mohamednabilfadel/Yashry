<?php

$price = 19.99;

$locale = 'en-US'; //browser or user locale
$currency = 'EGP';
$fmt = new NumberFormatter($locale . "@currency=$currency", NumberFormatter::CURRENCY);
$symbol = $fmt->getSymbol(NumberFormatter::CURRENCY_SYMBOL);
header("Content-Type: text/html; charset=UTF-8;");
echo $symbol . $price;

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($products); $i++) {
        $name = $products[$i]["name"];
        $price = $products[$i]["price"];
        $quantity = $products[$i]["quantity"];
        $total = $products[$i]["total"];
        echo ("<li> $name : $price : $quantity : $total <br/>");
    }
    ?>
</body>

</html>