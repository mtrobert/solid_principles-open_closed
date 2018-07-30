<?php namespace App\src;

use App\src\interfaces\PaymentMethodInterface;

class Checkout
{
  public function begin(Receipt $receipt, PaymentMethodInterface $payment)
  {
    $payment->acceptPayment($receipt);
  }
}
