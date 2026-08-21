<!--Considere o vetor abaixo. Desenvolva um algoritmo que encontre o segundo maior número do vetor. 
$numeros = [15, 8, 35, 42, 11, 27, 39]; 
Maior número: 42 
Segundo maior: 39 
Desafio: Não utilize sort(), rsort() ou funções semelhantes. 
-->

<?php
$numeros = [15, 8, 35, 42, 11, 27, 39];

// Passo 1: Inicia o maior com o primeiro termo e o segundo maior com o valor mínimo possível[cite: 1]
$maior = $numeros[0];
$segundoMaior = -PHP_INT_MAX;

// Passo 2: Percorre a lista para comparar os números[cite: 1]
foreach ($numeros as $num) {
    // Se achar um número estritamente maior que o atual $maior[cite: 1]
    if ($num > $maior) {
        $segundoMaior = $maior; // O antigo maior passa a ser o segundo maior[cite: 1]
        $maior = $num;         // O número atual vira o novo maior[cite: 1]
    } 
    // Se o número for intermediário entre o segundo maior e o maior[cite: 1]
    elseif ($num > $segundoMaior && $num < $maior) {
        $segundoMaior = $num;
    }
}

// Passo 3: Exibe o resultado obtido[cite: 1]
echo "Maior número: {$maior}\n";
echo "Segundo maior: {$segundoMaior}\n";
?>