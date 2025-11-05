<?php
class ShippingCalculation
{

  public function calculateShiiping($shippingType, $weight)
  {
    if ($shippingType == "fedex") {
      return $weight * 5;
    } elseif ($shippingType == "dhl") {
      return $weight * 7;
    }
  }
}
