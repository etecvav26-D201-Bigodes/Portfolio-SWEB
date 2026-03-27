<?php

$num = $_POST["num"];

for ($i = 1; $i <= $num; $i++) {
   #j para numero dentro das linhas e i para as linhas
    for ($j = 1; $j <= $i; $j++) {
    #espaço vazio para dar o espaço
        echo $j . " ";
    }
 #pular para a próxima linha
    echo "<br>";
}

?>