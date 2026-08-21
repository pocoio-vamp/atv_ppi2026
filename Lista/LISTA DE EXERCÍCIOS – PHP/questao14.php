<!--Considere o vetor abaixo. Crie um programa que informe quantas vezes cada número aparece. 
Evite imprimir o mesmo número mais de uma vez. 
$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5]; 
2 aparece 3 vezes 
5 aparece 4 vezes 
8 aparece 2 vezes 
10 aparece 1 vez 
-->

<?php
$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

// Passo 1: Vetor para armazenar as contagens[cite: 1]
$frequencia = [];

// Passo 2: Utiliza as entradas do vetor como chaves no array $frequencia[cite: 1]
foreach ($numeros as $num) {
    // Se o número já existir no array, soma +1, caso contrário inicia com 1[cite: 1]
    $frequencia[$num] = ($frequencia[$num] ?? 0) + 1;
}

// Passo 3: Percorre a estrutura auxiliar exibindo cada elemento único[cite: 1]
foreach ($frequencia as $num => $qtd) {
    $termo = ($qtd === 1) ? "vez" : "vezes";
    echo "{$num} aparece {$qtd} {$termo}\n";
}
?>