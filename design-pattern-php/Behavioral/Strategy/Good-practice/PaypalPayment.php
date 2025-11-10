<?php
class PaypalPayment implements PaymentStrategy
{
  public function pay(float $amount)
  {
    echo "connection to paypal server \n ";
    echo "processing " . $amount . " with paypal \n";
    echo "payment done \n ";
  }
}
