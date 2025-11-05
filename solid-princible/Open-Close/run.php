<?php

// --- Bad Practice ---
echo "--- Bad Practice ---\\n";
require_once 'Bad-Practice/ShippingCalculation.php';

$shipping = new ShippingCalculation();
$cost1 = $shipping->calculateShiiping('fedex', 10);
$cost2 = $shipping->calculateShiiping('dhl', 10);

echo "Fedex Cost: $cost1\\n";
echo "DHL Cost: $cost2\\n";
echo "\\n";


// --- Good Practice ---
echo "--- Good Practice ---\\n";
require_once 'Good-Pratice/ShippingStrategy.php';
require_once 'Good-Pratice/ShippingCalculator.php';
require_once 'Good-Pratice/FedExStrategy.php';
require_once 'Good-Pratice/DhStrategy.php';
require_once 'Good-Pratice/ArmexStrategy.php';


$shippingCalculator = new ShippingCalculator();

$fedExStrategy = new FedExStrategy();
$dhlStrategy = new DhStrategy();
$armexStrategy = new ArmexStrategy();

$costFedex = $shippingCalculator->calculate($fedExStrategy, 10);
$costDhl = $shippingCalculator->calculate($dhlStrategy, 10);
$costArmex = $shippingCalculator->calculate($armexStrategy, 10);


echo "Fedex Cost: $costFedex\\n";
echo "DHL Cost: $costDhl\\n";
echo "Armex Cost: $costArmex\\n";

?>