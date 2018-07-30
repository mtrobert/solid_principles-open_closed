<?php namespace App\src;

use App\src\interfaces\PaymentMethodInterface;

class CashPaymentMethod implements PaymentMethodInterface
{
  protected $type = "Cash";

  public function acceptPayment($receipt)
  {
    var_dump("accepting " . $this->type . " for " . $receipt->getReceipt());
  }
}
