<?php namespace App\src;

use App\src\interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
  public $radius;


  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
    $area = $this->radius * $this->radius * pi();
    return $area;
  }

}
