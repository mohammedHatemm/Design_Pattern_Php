<?php

namespace DesignPatterns\Creational\AbstractFactory\DarkTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Button;

class DarkButton implements Button
{
  public function render(): string
  {
    return 'Dark Button';
  }
}
