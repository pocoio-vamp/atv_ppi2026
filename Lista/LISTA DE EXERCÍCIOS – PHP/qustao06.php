<!--Crie três variáveis com valores numéricos. 
Utilizando apenas estruturas condicionais, descubra e
exiba qual é o maior dos três números.
Não utilize funções prontas como max().-->
<?php 
$a = 15; $b = 32; $c = 21;
if ($a >= $b && $a >= $c) {
    $maior = $a;
} elseif ($b >= $a && $b >= $c) {
    $maior = $b;
} else {
    $maior = $c;
}
echo "O maior número é: {$maior}\n";
?>