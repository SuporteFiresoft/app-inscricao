<?php
//A = município, B = inscrição, C = ordem do estabelecimento, D = Dígito de controle
//A1A2A3 B1B2B3B4B5B6 C1C2 D1D2
$codigoInscricao = "45206050000";
$codigoAlterado = "";

//acrescenta o 0 depois dos 3 primeiros numeros
for ($i = 1; $i < 11; $i++) {
    if ($i == 3) {

        return $codigoAlterado = "452006050000";
    }
    return;
}

$arrStr = str_split($codigoAlterado);
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

$codigoInscricao += strval($digito1);
//____________________________________

$arrModInv = [];
$ind = 2;
$soma = 0;

for ($i = count($codigoInscricao) - 1; $i >= 0; $i--) {
    $numInv = intval($codigoInscricao[$i]);
    $result = 0;
    if ($ind <= 11) {
        $result = $numInv * $ind;
        array_push($arrModInv, $result);
        $ind++;
    } else {
        $ind = 2;
        $result = $numInv * $ind;
        array_push($arrModInv, $result);
        $ind++;
    }
}

$somaFim = 0;

for ($i = 0; $i < count($arrModInv); $i++) {
    $somaFim += $arrModInv[$i];
}

if (($somaFim % 11) == 0 || ($somaFim % 11) == 1) {
    $codigoInscricao += strval($somaFim % 11);
} else {
    $codigoInscricao += strval(11 - ($somaFim % 11));
}

//Tem que retornar true ou false