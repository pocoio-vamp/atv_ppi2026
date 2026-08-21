<!--Utilizando while, faça uma contagem regressiva de 20 
até 0.
Quando chegar a zero, exiba "Contagem encerrada!".
Além disso, sempre que o número atual for múltiplo de 5,
 exiba ao lado "Múltiplo de 5".-->
<?php 
$numero = 20;
while ($numero >= 0) {
    $msg = ($numero > 0 && $numero % 5 == 0) ? "{$numero} - Múltiplo de 5" : $numero;
    echo $msg . "\n";
    $numero--;
}
echo "Contagem encerrada!\n";
?>