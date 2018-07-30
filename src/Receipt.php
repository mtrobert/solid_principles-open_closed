<?php namespace App\src;

class Receipt
{
  protected $receipt;


  public function __construct()
  {
    $this->receipt = rand(1, 1000000);
  }



  public function getReceipt()
  {
    return $this->receipt;
  }


  public function setReceipt($receipt)
  {
      $this->receipt = $receipt;
  }


}
