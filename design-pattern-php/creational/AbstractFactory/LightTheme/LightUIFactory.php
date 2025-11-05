<?php

namespace DesignPatterns\Creational\AbstractFactory\LightTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Button;
use DesignPatterns\Creational\AbstractFactory\Interfaces\Checkbox;
use DesignPatterns\Creational\AbstractFactory\Factory\UIFactory;

class LightUIFactory extends UIFactory
{
  public function createButton(): Button
  {
    return new LightButton();
  }
  public function createCheckbox(): Checkbox
  {
    return new LightCheckbox();
  }
}
