<?php
//recebe o código do município, o numero de inscrição e o numero de ordem do estabelecimento

//declarando variaveis para receber os codigos em string
$codigoInicial = "";
$idMunicipio = "";
$idInscricao = "";
$ordemEstabelecimento = "";

//recebe os numeros como string, acrescenta o 0 depois dos 3 primeiros numeros, converte pra numero e salva dentro de um array

//depois de receber num array, faz um foreach para multiplicar todos os itens em posição par por 1 e em posição impar por 2 e voltar eles pra um array

//alterar de um array para string e um foreach percorrendo e transformando cada um em numero e somando a alguma variavel soma

//verifica o valor soma para descobrir o valor da dezena exata mais próxima superior (talvez somar o primeiro digito +1 e substituir o segundo por 0)

//acrescenta o resultado dessa subtraçao no final do valor inicial criando um array

//A segunda parte, pega o valor final da primeira parte, multiplicar da direita pra esquerda o array total -1 posição, e multiplica por dois, tira -1 e multiplica por 3 até chegar no indice 0

//soma os produtos das multiplicações num foreach em que cada item é somado a uma variavel