<?php

class VisaPayment implements PaymentStrategy
{
  public function pay(float $amount)
  {
    echo "connection to visa server \n ";
    echo "processing " . $amount . " with visa \n";
    echo "payment done \n ";
  }
}
