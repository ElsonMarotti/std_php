<form>
    <input type="Texto:" name="nome">
    <input type="date" name='nascimento'>
    <input type="submit" value="ok">

</form>

<?php
//EXEMPLO DE FOREACH - Percorre uma ARRAY e coleção.
//Teste com (FOREACH - para cada) para mostrar os meses do ano de um array
echo "<br>";
echo "<br>";

if(isset($_GET)){
    foreach($_GET as $key => $value){        
    echo "Nome do Campo: " . $key."<br>" . "<br>";
    echo "Valor do Campo: " . $value;
    echo "<hr>";
    }
}

?>