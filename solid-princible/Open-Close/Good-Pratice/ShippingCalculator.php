<?php
class ShippingCalculator
{
  public function calculate(ShippingStrategy $strategy, $weight)
  {
    return $strategy->calculate($weight);
  }
}
