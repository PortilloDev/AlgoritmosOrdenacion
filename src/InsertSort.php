<?php

namespace App;
use App\Interfaces\SortInterface;

class InsertSort implements SortInterface
{
   
    public function sort(array $list):void
    {
        $tiempo_inicial = microtime(true); 
        $this->showList($list);
        $size = count($list);
        $aux="";
            
            for ($i=1; $i < $size; $i++) {
                $aux = $list[$i];

                for ($j = ($i - 1) ;( $j >= 0 ) && ( $list[$j] > $aux) ; $j--) { 
                    $list[$j+1] =  $list[$j];
                }
                $list[$j+1] = $aux;
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