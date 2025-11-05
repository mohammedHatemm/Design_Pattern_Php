<?php

namespace DesignPatterns\Creational\AbstractFactory\LightTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Checkbox;

class LightCheckbox implements Checkbox
{
  public function render(): string
  {
    return 'light-checkbox';
  }
}
