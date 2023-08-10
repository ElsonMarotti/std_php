<?php
//EXEMPLO DE FOREACH - Percorre uma ARRAY e coleção.
//Teste com (FOREACH - para cada) para mostrar os meses do ano de um array

$infoMes = 8;

$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Desembro"
);
echo $meses[$infoMes];
//foreach($meses as $mes){
//   echo "O mês é: ".$mes."<br>";
//}
echo "<br>";
echo "<br>";
switch ($infoMes) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Não existe esse Mês!";
}




echo "<br>";
echo "<br>";
$today = date("F j, Y, g:i a"); // March
echo $today;
