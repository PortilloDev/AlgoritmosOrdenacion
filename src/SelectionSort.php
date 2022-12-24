<?php

namespace App;
use App\Interfaces\SortInterface;

class SelectionSort implements SortInterface
{
   
    public function sort(array $list):void
    {
        $tiempo_inicial = microtime(true); 
        $this->showList($list);
        $size = count($list);
        $aux="";
        $positionMin = "";

            
            for ($i=0; $i < $size; $i++) {
                $positionMin = $i;

                for ($j= ($i +1) ; $j < $size; $j++) { 
                        if ($list[$positionMin] < $list[$j]) {
                            $positionMin = $j;
                        }
                }

                $aux = $list[$i];
                $list[$i] = $list[$positionMin];
                $list[$positionMin] = $aux;
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