<!-- 
2 -Função PrimoInferior($num)
Crie uma função que receba como parâmetro um número inteiro e retorne o maior número primo inferior ao número recebido como parâmetro. Se o argumento for negativo, a função deverá retornar o valor zero.

Exemplo para teste:

Numero 10 = 7
Número 30 = 29
-->

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
    echo primoInferior(10);
    echo "<br>" .  primoInferior(30);
    
?>