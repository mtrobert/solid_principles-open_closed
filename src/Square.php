<?php namespace App\src;

use App\src\interfaces\ShapeInterface;

class Square implements ShapeInterface
{
  public $height;
  public $width;


  public function __construct($height, $width)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function area()
  {
   $area = $this->height * $this->width;
   return $area;
  }



}
