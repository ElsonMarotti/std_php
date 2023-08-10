<?php
//EXEMPLO DE FOREACH - Percorre uma ARRAY e coleção.
//Teste com (FOREACH - para cada) para mostrar os meses do ano de um array
$meses = array(
    "Janeiro","Fevereiro", "Março",
    "Abril","Maio","Junho",
    "Julho","Agosto","Setembro",
    "Outubro","Novembro","Desembro"
   
);

foreach($meses as $mes){
    echo "O mês é: ".$mes."<br>";
}

?>