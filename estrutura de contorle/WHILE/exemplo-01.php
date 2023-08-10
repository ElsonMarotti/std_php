<?php
//EXEMPLO DE WHILE - Enquanto for verdade executa a ação.
//Teste com (WHILE) para mostrar os números randomicos de função rand(), 
//faz sorteio aleatório

$condicao = true;
$num=100;
$repet=0;
while($condicao){
    $numero = rand(0,100);
    $repet += 1;
    echo $numero . " - ";
    if($numero === $num){
        echo "<br>";
        echo "Estou sorteando para achar: $num!!!";
        echo "<br>";
        echo "Foi executado ".$repet." vezes para sair o número .".$num;
        $condicao = false;
    }else{
       
    }
}


?>