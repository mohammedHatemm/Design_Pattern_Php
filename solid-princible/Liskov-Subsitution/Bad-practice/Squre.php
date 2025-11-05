<?php
class Squre extends Rectagle
{

  public function setWidht($widht)
  {
    $this->widht = $widht;

    //opsote of the parent

    $this->height = $widht;
  }

  public function setHeight($height)
  {
    $this->widht  = $height;
    $this->height = $height;
  }
}

