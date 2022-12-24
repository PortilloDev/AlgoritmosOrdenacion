<?php 

require './../vendor/autoload.php';

use App\BubbleSort;
use App\CustomSort;
use App\InsertSort;
use App\SelectionSort;
use App\Sort;

echo 'Lista de datos original desordenada';
echo "<br/>";
echo "<br/>";

$array = [2500,1,2,125,-5,4,-1520,7,9,10,90,5263,1000,-4521,1025452,333,9554,0,-2,5,3,70,13,548544,888];
print_r($array);
echo "<br/>";
echo "<br/>";

$sort = new Sort(new BubbleSort());

echo 'Esta es la ordenación por método <strong>BubbleSort</strong>';
echo "<br/>";
echo "<br/>";
$sort->sort($array);
echo "<br/>";



$sort = new Sort(new SelectionSort());

echo 'Esta es la ordenación por método <strong>Ordenación por selección</strong>';
echo "<br/>";
echo "<br/>";
$sort->sort($array);
echo "<br/>";



$sort = new Sort(new InsertSort());

echo 'Esta es la ordenación por método <strong>Ordenación por inserción</strong>';
echo "<br/>";
echo "<br/>";
$sort->sort($array);
echo "<br/>";



$sort = new Sort(new CustomSort());

echo 'Esta es la ordenación por método de un<strong> algoritmo propio</strong>';
echo "<br/>";
echo "<br/>";
$sort->sort($array);
echo "<br/>";
