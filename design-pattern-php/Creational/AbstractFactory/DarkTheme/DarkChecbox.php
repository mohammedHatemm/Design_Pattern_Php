<?php

namespace DesignPatterns\Creational\AbstractFactory\DarkTheme;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Checkbox;

class DarkCheckbox implements Checkbox
{
  public function render(): string
  {
    return 'Dark Checkbox';
  }
}
