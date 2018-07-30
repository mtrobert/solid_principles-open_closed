<?php namespace App\src;

use App\src\interfaces\PaymentMethodInterface;

class PaypalPaymentMethod implements PaymentMethodInterface
{
  protected $type = "Paypal";

  public function acceptPayment($receipt)
  {
    var_dump("accepting " . $this->type . " for " . $receipt->getReceipt());
  }
}
