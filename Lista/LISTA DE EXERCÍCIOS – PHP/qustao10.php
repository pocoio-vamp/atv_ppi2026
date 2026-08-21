<!--Utilizando variáveis e uma estrutura for, 
exiba os 15 primeiros números da sequência de
Fibonacci.
Os próximos números devem ser calculados pelo programa, 
e não escritos manualmente.-->
<?php 
$atual = 0; $proximo = 1;
for ($i = 1; $i <= 15; $i++) {
    echo "{$atual} ";
    $temp = $atual + $proximo;
    $atual = $proximo;
    $proximo = $temp;
}
?>