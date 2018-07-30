<?php

require_once 'vendor/autoload.php';

use App\src\{Circle, Square, AreaCalculator, Checkout, CashPaymentMethod, Receipt, PaypalPaymentMethod};

// $shapes = [];
// $shapes[] = new Circle(3);
// $shapes[] = new Circle(5);
// $shapes[] = new Square(5, 7);

$square = new Square(4,5);
$circle = new Circle(3);

$area = new AreaCalculator($square);
var_dump($area->calculate($square));
echo  "</br>";
var_dump($area->calculate($circle));
echo  "</br>";

$receipt = new Receipt();
$paypalPaymentMethod = new PaypalPaymentMethod();
$checkout = new Checkout();
$checkout->begin($receipt, $paypalPaymentMethod);
