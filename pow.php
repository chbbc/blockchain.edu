<?php
$tempoinicial = microtime_float();
$hashinicial = "6B88C087247AA2F07EE1C5956B8E1A9F4C7F892A70E324F1BB3D161E05CA107B";
$qtd_zero = 5;
$tentativas = 100 * 100 * 100 * 100; // 100.000.000
$zerostring = "0";

for ($x = 0; $x < ($qtd_zero - 1); $x++) {
	$zerostring .= "0";
}

echo 'Hash: ' . $hashinicial. PHP_EOL;
echo 'Quantidade de zeros: ' . $qtd_zero . PHP_EOL;
echo 'Tentativas: ' . number_format($tentativas,0,'','.') . PHP_EOL;
echo 'Aguarde...'.PHP_EOL;

for ($nonce = 1; $nonce < $tentativas; $nonce++) {

	$newhash = hash('sha256',$hashinicial.$nonce);

	if (substr($newhash,0,$qtd_zero) === $zerostring) {
		
		echo '** Encontrado com o nonce '.number_format($nonce,0,'','.').PHP_EOL;
		echo $newhash . PHP_EOL;
		retornaTempo($tempoinicial);
		die();
	}
}

echo '** Não encontrado.' . PHP_EOL;
retornaTempo($tempoinicial);

function retornaTempo($tempoinicial)
{
	$time = microtime_float() - $tempoinicial;
	echo 'Duração do script: ' . $time . ' segundos' . PHP_EOL.PHP_EOL;
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
