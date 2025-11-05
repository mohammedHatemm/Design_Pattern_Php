<?php
class ArmexStrategy implements ShippingStrategy
{

  public function calculate($weight)
  {
    return $weight * 9;
  }
}
