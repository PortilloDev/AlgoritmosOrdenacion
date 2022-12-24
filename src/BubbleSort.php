<?php

namespace App;
use App\Interfaces\SortInterface;

class BubbleSort implements SortInterface
{
   
    public function sort(array $list):void
    {
        $tiempo_inicial = microtime(true); 
        $this->showList($list);
        $size = count($list);
        $aux="";
        $rounds = 0;
        $isOrder = false;
        while(! $isOrder) {
            
            $isOrder = true;
            
            for ($i=0; $i < (( $size - 1) - $rounds); $i++) {
                if ($list[$i] > $list[$i+1]) {
                    $aux = $list[$i+1];
                    $list[$i+1] = $list[$i];
                    $list[$i] = $aux;
    
                    $isOrder = false;
                }
            }
            $rounds++;
            $this->showList($list);
        }

        $this->calculationOfExecutionTime($tiempo_inicial);
    }


    private function showList(array $list) :void
    {
        for ($i=0; $i < count($list); $i++) {
           echo $list[$i] . ' ';
        }
        echo '<br/>';
    }

    
    private function calculationOfExecutionTime(string $tiempo_inicial):void
    {
        $tiempo_final = microtime(true);
        $tiempo = $tiempo_final - $tiempo_inicial; 
        echo "El tiempo de ejecución de la ordenación ha sido de " . $tiempo . " segundos";
        echo "<br/>";
        echo "<br/>";
    }
}