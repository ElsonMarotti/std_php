<?php
//EXEMPLO DE FOR - PARA
//Teste com (if-continue) para omitir/pular range de 200 a 800 

for($i = 0; $i <= 1000; $i+=50){
    if ($i>200 && $i<800) continue;
    echo $i ."<br>";
}


?>