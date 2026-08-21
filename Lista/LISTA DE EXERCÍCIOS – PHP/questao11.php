<!--Considere o vetor abaixo. Percorra-o e descubra: 
$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55]; 
● o maior número; 
● o menor número; 
● a posição do maior número; 
● a posição do menor número. 
Desafio: Não utilize max(), min() ou funções equivalentes. 
-->

<?php
$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

// Passo 1: Assume que o primeiro elemento do array é o menor e o maior simultaneamente[cite: 1]
$maior = $numeros[0];
$posMaior = 0;
$menor = $numeros[0];
$posMenor = 0;

// Passo 2: Percorre o array capturando a posição ($pos) e o valor ($val)[cite: 1]
foreach ($numeros as $pos => $val) {
    // Passo 3: Substitui as referências se encontrar um número maior[cite: 1]
    if ($val > $maior) {
        $maior = $val;
        $posMaior = $pos;
    }
    // Passo 4: Substitui as referências se encontrar um número menor[cite: 1]
    if ($val < $menor) {
        $menor = $val;
        $posMenor = $pos;
    }
}

// Passo 5: Imprime os resultados[cite: 1]
echo "Maior valor: {$maior} (Posição {$posMaior})\n";
echo "Menor valor: {$menor} (Posição {$posMenor})\n";
?>