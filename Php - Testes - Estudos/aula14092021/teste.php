<?php

function f($n){

    $f0 = 1;  $f1 = 1;

  $soma = 0;

        if( $n == 1) return 1;

    for ($i = 0; $i < $n-2; $i++) { 

                       $f2 = $f1 + $f0;

             $f0 = $f1;

         $f1 = $f2; 

                        $soma = $soma + $f2;    

      } 

     return $soma+1; 

}

echo f(6); 

?>