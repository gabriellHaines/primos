<?php
$numero = 100000;

$last = [1,3,7,9];
$primos = [2,3,5];
$cont = 0;
//define de onde ate onde tem que ir
for ($i=7; $i < $numero; $i++) {
    //zera o contador de divisores
    $cont = 0;
    //verifica se os numeros do fim não e par ou 5
    if(in_array(substr($i, -1),$last)){
        // entra pra ver se é primo
        for ($contador=3; $contador < $i ; $contador++) { 
            //se o resto da divisiao for igual a 0 
            if ($i % $contador == 0) {
                //soma um ao contador
                $cont ++;
                // se o contador for maior que 1 sai do loop
                if ($cont > 1 ) {
                    break; 
                }
            }
        }
        //se o numero for primo printa ele
        if ($cont < 2) {
            array_push($primos,$i);
        }
    }
}

print_r($primos);
?>