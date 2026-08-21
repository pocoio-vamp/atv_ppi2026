<!--Crie uma variável $numero e atribua um valor inteiro a ela.
Utilizando for, exiba a tabuada desse número de 1 até 10.-->
<?php
$numero = 5;

for($i=1;$i<=10;$i++){
    echo "{$numero} x {$i} = " . ($numero * $i) . "\n";
}

?>