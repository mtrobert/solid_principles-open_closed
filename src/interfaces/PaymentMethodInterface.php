<?php namespace App\src\interfaces;


interface PaymentMethodInterface
{
  //variables to implement 
  // @var $type
  public function acceptPayment($receipt);
}
