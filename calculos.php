<?php

// Calculadora com operações aritméticas simples

echo "Calculadora para as quatro operações aritméticas\n\n";

echo "Digite o primeiro valor:\n";

// Forçando as variáveis a aceitarem somente valores do tipo inteiro
$valor1 = (int) readline();

echo "Digite o segundo valor:\n";
$valor2 = (int) readline();

$valoresInseridos = $valor1 . " e " . $valor2 . "\n";

echo "Valores inseridos: " . $valoresInseridos . "\n";

$soma = $valor1 + $valor2;
$subtracao = $valor1 - $valor2;
$multiplicacao = $valor1 * $valor2;
$divisao = $valor1 / $valor2;

// Raiz quadrada gerada de forma automática usando a função sqrt() da linguagem
$raizQuadrada = sqrt($soma);

// Raiz quadrada manual usando o Método de Newton
function raizQuadradaManual($numero) {
    $valorInicial = $numero;
    // Dependendo da precisão, o valor da raiz quadrada manual 
    // pode acabar sendo diferente do valor obtido se realizarmos
    // a raiz quadrada de forma automática
    $precisao = 0.0000001; // Quanto menor o valor, mais preciso será a resposta
    while (abs($valorInicial * $valorInicial - $numero) > $precisao) {
        $valorInicial = 0.5 * ($valorInicial + $numero / $valorInicial);
    }
    return $valorInicial;
}

$raizQuadradaManual = raizQuadradaManual($soma);

// Exponencial
$exponencial = $valor1 ** $valor2;

echo "Resultado da Soma: " . $soma . "\n" 
. "Resultado da Subtração: " . $subtracao . "\n" 
. "Resultado da Multiplicação: " . $multiplicacao . "\n" 
. "Resultado da Divisão: " . $divisao . "\n"
. "Resultado da Raiz Quadrada: " . $raizQuadrada . "\n"
. "Resultado da Raiz Quadrada de forma manual: " . $raizQuadradaManual . "\n"
. "Resultado da Exponencial: " . $exponencial . "\n";

?>
