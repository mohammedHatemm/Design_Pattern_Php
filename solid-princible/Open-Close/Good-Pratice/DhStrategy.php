<?php
class DhStrategy implements ShippingStrategy
{
  public function calculate($weight)
  {
    return $weight * 7;
  }
}
