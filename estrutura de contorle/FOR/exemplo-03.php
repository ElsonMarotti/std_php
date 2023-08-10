<?php
//EXEMPLO DE FOR - PARA
//Teste com (if-continue) para omitir/pular range de 200 a 800 e
// Teste com (if-break) para parar o laço ao atingir alvo.
for($i = 0; $i <= 1000; $i+=50){
    if ($i>200 && $i<800) continue;
    echo $i ."<br>";
    if ($i === 900) break;
}


?>