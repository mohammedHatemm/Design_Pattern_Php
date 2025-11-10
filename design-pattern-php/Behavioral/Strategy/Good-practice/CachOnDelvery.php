<?php
class ChachOnDelivery implements PaymentStrategy
{
  public function pay(float $amount)
  {
    echo "Processing Cash on Delivery.\n";
    echo "Order amount $" . $amount . " will be collected by driver.\n";
    echo "Order confirmed.\n";
  }
}
