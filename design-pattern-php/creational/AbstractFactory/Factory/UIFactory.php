<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Button;
use DesignPatterns\Creational\AbstractFactory\Interfaces\Checkbox;

interface UIFactory
{
  public function createButton(): Button;
  public function createCheckbox(): Checkbox;
}
