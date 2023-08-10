<?php
//EXEMPLO DE FOR - PARA
//Teste com (FOR - HTML "select") para criar range de 1917 ao ano atual

echo "<select>";
for($i=date("Y"); $i>=date("Y")-100; $i--) { 
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";
?>