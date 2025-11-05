<?php

// --- Bad Practice ---
echo "--- Bad Practice ---\n";
require_once 'Bad-practice/Rectagle.php';
require_once 'Bad-practice/Squre.php';

function printArea(Rectagle $rectagle)
{
    $rectagle->setWidht(5);
    $rectagle->setHeight(10);

    echo "Expected Area: 50\n";
    echo "Actual Area: " . $rectagle->getArea() . "\n";
}


$rect = new Rectagle();
echo "--- Rectangle ---\n";
printArea($rect);


$squre = new Squre();
echo "--- Squre ---\n";
printArea($squre);

echo "\n\n";

// --- Good Practice ---
echo "--- Good Practice ---\n";

require_once 'Good-practice/Rectagle.php';
require_once 'Good-practice/Squre.php';

$rect = new \Good-practice\Rectagle(5, 10);
echo "Rectangle Area: " . $rect->getArea() . "\n";

$squre = new \Good-practice\Squre(5);
echo "Squre Area: " . $squre->getArea() . "\n";

?>
