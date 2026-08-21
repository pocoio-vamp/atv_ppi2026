<!--Utilizando while, calcule e exiba a soma de todos os números de 1 até 100.
O programa deve apresentar apenas o resultado final.-->
<?php 
$i = 1;
$soma = 0;
while ($i <= 100) {
    $soma += $i;
    $i++;
}
echo "Soma total: {$soma}\n";
?>