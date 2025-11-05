<?php
class FedExStrategy implements ShippingStrategy
{

  public function calculate($weight)
  {
    return $weight * 5;
  }
}
