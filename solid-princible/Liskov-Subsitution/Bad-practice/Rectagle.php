<?php
class Rectagle
{
  protected $widht;
  protected $height;

  public function setWidht($widht)
  {
    $this->widht = $widht;
  }
  public function setHeight($height)
  {
    $this->height = $height;
  }
  public function getArea()
  {
    return $this->widht * $this->height;
  }
}
