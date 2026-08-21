<!--Utilizando uma estrutura de repetição while, exiba todos os números de 1 até 50.
Ao final, exiba também a mensagem: "Fim da contagem."-->

<?php

$numero = 1;

while ($numero <= 50) {
    echo $numero . ",";
    $numero++;
}

echo "fim da contagem";

?>