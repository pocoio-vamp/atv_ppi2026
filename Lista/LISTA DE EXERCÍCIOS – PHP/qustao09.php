<!--Crie uma variável $numero. 
Desenvolva um programa que determine se o número é primo ou
 não.
Um número primo é aquele que possui exatamente dois 
divisores: 1 e ele mesmo.
Utilize uma estrutura de repetição e uma estrutura 
condicional.-->
<?php 
$numero = 7;
$divisores = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) $divisores++;
}
echo ($divisores == 2) ? "{$numero} é primo.\n" : "{$numero} não é primo.\n";
?>