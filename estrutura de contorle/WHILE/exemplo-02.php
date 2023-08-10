<?php
//EXEMPLO DE WHILE - Enquanto for verdade executa
//Teste com (DO - WHILE) para mostrar os resultado de desconto.
//DO - WHILE executa pelomenos uma vez, mesmo que seja falso.
 
$total = 150;
$desconto = 0.9;

do{
    $total *= $desconto;
}while($total >=100);
echo $total;
?>