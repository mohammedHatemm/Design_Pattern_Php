<?php
interface ShippingStrategy
{
  public function calculate($weight);
}
