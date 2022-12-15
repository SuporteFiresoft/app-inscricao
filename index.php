<?php
//A = município, B = inscrição, C = ordem do estabelecimento
//A1A2A3 B1B2B3B4B5B6 C1C2 D1D2
$codigoInicial = "06230790400";
$codigo1 = "";

//acrescenta o 0 depois dos 3 primeiros numeros
for ($i = 1; $i < 4; $i++) {
    if ($i == 3) {
        return $codigo1 = "062030790400";
    }
    return;
}

$arrStr = str_split($codigo1);
$produto = 0;
$soma = 0;
$arrMod = [];

for ($i = 0; $i < count($arrStr); $i++) {
    $char = $arrStr[$i];
    if ($i != 0 && ($i % 2) != 0) {
        $produto = $char * 2;
        array_push($arrMod, $produto);
    } else {
        array_push($arrMod, $char);
    }
}

$arrStrSoma = implode("", $arrMod);

for ($i = 0; $i < strlen($arrStrSoma); $i++) {
    $num = intval($arrStrSoma[$i]);
    $soma += $num;
}

$dezenaSuperior = ceil($soma / 10) * 10;
$digito1 = $dezenaSuperior - $soma;

$codigoInicial += strval($digito1);
//____________________________________

//A segunda parte, pega o valor final da primeira parte, multiplicar da direita pra esquerda o array total -1 posição, e multiplica por dois, tira -1 e multiplica por 3 até chegar no indice 0
for ($i = count($codigoInicial); $i > 0; $i--) {
}
//soma os produtos das multiplicações num foreach em que cada item é somado a uma variavel