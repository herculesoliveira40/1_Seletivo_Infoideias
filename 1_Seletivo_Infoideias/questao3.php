<!--
3 - Escreva um programa
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
O número que mais se repete é o 2. 
Ele se repete 4 vezes
-->


<?php
    $array = array(
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),
         rand(1, 10),        
    ); 
    echo "<pre>";
      var_dump($array);
    echo "</pre>";
    
    echo "<hr>";

    echo "<pre>";
      print_r(array_count_values($array));
    echo "</pre>";

    ?>