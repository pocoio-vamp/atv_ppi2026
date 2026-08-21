<!--Considere o vetor abaixo. Percorra-o e calcule: 
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5]; 
● a média da turma; 
● quantos alunos possuem nota maior ou igual a 6; 
● quantos alunos possuem nota menor que 6; 
● a maior nota; 
● a menor nota. 
Desafio: Não utilize funções prontas para encontrar o maior e o menor valor. 
-->

<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$soma = 0;
$aprovados = 0;
$reprovados = 0;
$maior = $notas[0];
$menor = $notas[0];

// Passo 1: Percorre cada nota do vetor[cite: 1]
foreach ($notas as $nota) {
    $soma += $nota; // Acumula notas para a média[cite: 1]
    
    // Passo 2: Contabiliza o número de alunos por situação[cite: 1]
    if ($nota >= 6.0) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    // Passo 3: Atualiza a maior e a menor nota manualmente[cite: 1]
    if ($nota > $maior) $maior = $nota;
    if ($nota < $menor) $menor = $nota;
}

// Passo 4: Calcula a média simples[cite: 1]
$media = $soma / count($notas);

// Passo 5: Exibe o relatório final[cite: 1]
echo "Média da turma: {$media}\n";
echo "Alunos com nota >= 6: {$aprovados}\n";
echo "Alunos com nota < 6: {$reprovados}\n";
echo "Maior nota: {$maior}\n";
echo "Menor nota: {$menor}\n";
?>