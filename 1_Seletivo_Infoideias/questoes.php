<!-- 
1 - Função SeculoAno($ano)
Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17
 -->

 <html>
 <head>
  <title>Questão 1</title>
 </head>
 <body>
 <form action="" method="get">
  Digite o ano: <input type="number" name="ano" />
  <input type="submit" name="submit" value="Calcular seculo" />
 </form>  
    <?php

        function seculoAno($ano) {              
            $seculo = ($ano / 100);    
            return "Ano $ano = século " . ceil($seculo);
        }  
        echo seculoAno($ano = $_GET['ano']);         
    ?>
    
 </body>
</html>


<!-- 
2 -Função PrimoInferior($num)
Crie uma função que receba como parâmetro um número inteiro e retorne o maior número primo inferior ao número recebido como parâmetro. Se o argumento for negativo, a função deverá retornar o valor zero.

Exemplo para teste:

Numero 10 = 7
Número 30 = 29
-->

<html>
 <head>
  <title>Questão 2</title>
 </head>
 <body>
 <form action="" method="get">
  Digite o ano: <input type="number" name="num" />
  <input type="submit" name="submit" value="Calcular Ultimo Primo" />
 </form>  
    <?php

    function primoInferior($num) {
        
        if ($num > 1) {    
            for($i = 1; $i <= $num; $i++)
            {
            
                $numerosprimos = 0;
                

                for($j = $i; $j >= 1; $j--)
                {

                    if (($i % $j) == 0) {
                        $numerosprimos++;
                    }
                }

                if ($numerosprimos  == 2)
                {
                    $primos[] = $i;

                }
            }
            return "Numero $num = " . end($primos);

        }
        
        else{
            return 0;
        }
    }  
    echo primoInferior($num = $_GET['num']);
?>
    
 </body>
</html>

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
    
<!--
4 - Função SequenciaCrescente($array)
Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste 

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
    -  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true
-->
