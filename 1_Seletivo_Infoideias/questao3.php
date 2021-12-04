<!--
3 - Escreva um programa
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
O número que mais se repete é o 2. 
Ele se repete 4 vezes
-->


<?php
    $array = array();
    for ($i = 0; $i < 20; $i++) {
        $array[$i] = rand(0,10); 
    }


    $quantidade = array_count_values($array);
    arsort($quantidade); 
    print_r($quantidade);

    echo " <hr>  [ ";
    for ($i = 0; $i < 20; $i++) {
        echo $array[$i] . ',';
    }
    echo " ]</pre> <hr>";
  

    echo "<pre>";
    echo "Ocorrencias: ";
    print_r(array_count_values($array));
    echo "</pre>";


    echo " <hr> <br/> O numero que mais repete é: ";
    $valorAnterior = 0;
    foreach ($quantidade as $key => $valor) {
        if($valor < $valorAnterior) {
            break;
        } else {
            echo "$key. <br> ";
            echo "Ele se repete $valor vezes <br> <br>  <br> ";
            $valorAnterior = $valor;
        }
}

    ?>
