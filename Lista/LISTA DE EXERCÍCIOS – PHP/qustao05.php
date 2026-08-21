<!--Crie uma variável $numero. Utilizando if e else, informe:
● se o número é múltiplo de 3;
● se o número é múltiplo de 5;
● se é múltiplo de 3 e 5 ao mesmo tempo;
● ou se não é múltiplo de nenhum dos dois.-->
<?php 
$numero = 15;
if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "Múltiplo de 3 e 5 ao mesmo tempo.\n";
} elseif ($numero % 3 == 0) {
    echo "Múltiplo de 3.\n";
} elseif ($numero % 5 == 0) {
    echo "Múltiplo de 5.\n";
} else {
    echo "Não é múltiplo de nenhum dos dois.\n";
}
?>