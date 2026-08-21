<!--Crie uma variável $numero contendo um número inteiro 
positivo.
Utilizando for, calcule o fatorial desse número. 
Não utilize funções prontas para realizar o cálculo.-->
<?php 
$numero = 5;
$fatorial = 1;
for ($i = $numero; $i >= 1; $i--) {
    $fatorial *= $i;
}
echo "{$numero}! = {$fatorial}\n";
?>