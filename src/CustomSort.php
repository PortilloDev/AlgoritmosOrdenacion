<?php

namespace App;
use App\Interfaces\SortInterface;

class CustomSort implements SortInterface
{

    /**
     * Ordena de forma simultanea poniendo los elementos más pequeños ha un lado y los más grandes al otro lado.
     * Teniendo que recorrer solo la mitad de la lista.
     * 
     */
    public function sort(array $list):void
    {
        $tiempo_inicial = microtime(true); 
        $this->showList($list);
        $size = count($list);
        $aux="";
        $positionMin = "";
        $positionMax = "";
        $positionFinal = $size - 1;

            
            for ($i=0; $i < $size / 2; $i++) {
                $positionMin = $i;
                $positionMax = $i;

                for ($j= $i ; $j < $positionFinal; $j++) { 
                        if ($list[$j] > $list[$positionMax]) {
                            $positionMax = $j;
                        }
                        if ($list[$j] < $list[$positionMin]) {
                            $positionMin = $j;
                        }
                }
                $aux = $list[$positionMin];
                $list[$positionMin] = $list[$i];
                $list[$i] = $aux;
                
                if($positionMax === $i){
                    $positionMax = $positionMin;
                }
                
                $aux = $list[$positionFinal];
                $list[$positionFinal] = $list[$positionMax];
                $list[$positionMax] = $aux;

                $positionFinal--;
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