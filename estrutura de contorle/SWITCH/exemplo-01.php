<?php
//EXEMPLO de SWITCH

$diaDaSemana = 8; //date("w");
echo $diaDaSemana;
echo "<br>";
switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-Feira";
        break;
    case 2:
        echo "Terça-Feira";
        break;
    case 3:
        echo "Quarta-Feira";
        break;
    case 4:
        echo "QUinta-Feira";
        break;
    case 5:
        echo "Sexta-Feira";
        break;
    case 6:
        echo "Sábado";
        
    default:
        echo "Data invalida!";
}

?>