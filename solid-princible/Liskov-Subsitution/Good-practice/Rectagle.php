<?php

require_once 'Shape.php';

class Rectagle implements Shape
{
  protected $widht;
  protected $height;

  public function __construct($widht, $height)
  {
    $this->widht = $widht;
    $this->height = $height;
  }

  public function getArea()
  {
    return $this->widht * $this->height;
  }
}
