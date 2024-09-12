<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- inline style -->
    <div stle="width: 800px; margin: 0 auto;">
        <div style="min-height: 1000px; width: 100%; backgroud-color: #4CAF50;">
            <h1>Cabeçalho</h1>
        </div>
</body>
</html>

<?php
$nome = "ray";
$idade = 19;
$carteira = 10;
echo "ola, mundo".$nome."<br>";
echo $idade;

if ($carteira == 10) 
    echo " dez"."<br>";
else if ($carteira >= 10)
    echo "o valor da carteira é maior que dez";
else 
    echo "o valor da carteira é menor"."<br>";


$cont = 0;
while ($cont<10){
    echo $cont;
    $cont++;
}

echo ".<br>";

$cont2 = 10;
do {
    $cont2 --;
    echo $cont2;
} while ($cont2 > 0);

echo ".<br>";

echo "contagem de 1 a 10: ";
for ($i=1;$i<=10;$i++){
    echo $i;
}

echo ".<br>";
$numero = 10;
switch($numero){
    case 10:
        echo "10";
        break;
}

$x = 10;

$conta = "*";
$c = 1;

