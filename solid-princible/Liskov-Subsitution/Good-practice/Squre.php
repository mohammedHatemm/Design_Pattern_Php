<?php

require_once 'Shape.php';

class Squre implements Shape
{
  protected $side;

  public function __construct($side)
  {
    $this->side = $side;
  }

  public function getArea()
  {
    return $this->side * $this->side;
  }
}
