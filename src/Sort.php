<?php 

namespace App;
use App\Interfaces\SortInterface;

class Sort 
{
    protected $algorithm;

    public function __construct(SortInterface $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function sort(array $list) :void
    {
      $this->algorithm->sort($list);
    }
}