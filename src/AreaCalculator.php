<?php namespace App\src;

use App\src\interfaces\ShapeInterface;

// class AreaCalculator
// {
//   public function calculate($shapes)
//   {
//     foreach ($shapes as $shape)
//     {
//       $array[] = $shape->area();
//     }
//
//     return array_sum($array);
//   }
//
//
// }

/*
*   todo:
*
*Do the same class but work with only one object shape of a imaginary type(class) instead of an array Shapes
*/
class AreaCalculator
{

  public function calculate(ShapeInterface $shape)
  {
    return $shape->area();
  }


}
