<?php

namespace DesignPatterns\Creational\AbstractFactory\LightTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Button;

class LightButton implements Button
{
  public function render(): string
  {
    return 'Light Button';
  }
}
