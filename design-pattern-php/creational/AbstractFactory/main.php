<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\DarkTheme\DarkUIFactory;
use DesignPatterns\Creational\AbstractFactory\LightTheme\LightUIFactory;
use DesignPatterns\Creational\AbstractFactory\Factory\UIFactory;

require_once __DIR__ . '/autoload.php';

$lightUIFactory = new LightUIFactory();
$darkUIFactory = new DarkUIFactory();

$lightButton = $lightUIFactory->createButton();
$lightCheckbox = $lightUIFactory->createCheckbox();

$darkButton = $darkUIFactory->createButton();
$darkCheckbox = $darkUIFactory->createCheckbox();

echo $lightButton->render() . PHP_EOL;
echo $lightCheckbox->render() . PHP_EOL;
echo $darkButton->render() . PHP_EOL;
echo $darkCheckbox->render() . PHP_EOL;

$lightUIFactory->createButton()->render();
$lightUIFactory->createCheckbox()->render();
$darkUIFactory->createButton()->render();
$darkUIFactory->createCheckbox()->render();

$uiFactory = new UIFactory();
$uiFactory->createButton()->render();
$uiFactory->createCheckbox()->render();
