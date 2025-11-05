<?php

namespace DesignPatterns\Creational\AbstractFactory\DarkTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Button;
use DesignPatterns\Creational\AbstractFactory\Interfaces\Checkbox;
use DesignPatterns\Creational\AbstractFactory\Factory\UIFactory;


class DarkUIFactory implements UIFactory
{
  public function createButton(): Button
  {
    return new DarkButton();
  }

  public function createCheckbox(): Checkbox
  {
    return new DarkCheckbox();
  }
}
