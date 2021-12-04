<!-- 
Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17
 -->


<?php

     function seculoAno($ano) {
        $seculo = ($ano / 100);    
         return "Ano $ano = século " . ceil($seculo);
    }  

    echo seculoAno(1905);
    echo "<br>" . seculoAno(1700) ;
?>

