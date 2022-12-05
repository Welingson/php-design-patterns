<?php

require '../autoload.php';

$teslaFactory = new \factoryMethod\TeslaFactory();
$dodgeFactory = new \factoryMethod\DodgeFactory();

try {

    $teslaModelS = $teslaFactory->createCar('modelo_s');
    $teslaModelX = $teslaFactory->createCar('modelo_x');

    $dodgeDart =  $dodgeFactory->createCar('dart');
    $dodgeCharger = $dodgeFactory->createCar('charger');

} catch (Exception $e) {
    echo $e->getMessage();
}


echo $teslaModelS->brake();
echo $teslaModelS->speedUp();
echo $teslaModelS->changeGears();
echo "\n";

echo $dodgeCharger->brake();
echo $dodgeCharger->speedUp();
echo $dodgeCharger->changeGears();
echo "\n";

echo $teslaModelX->brake();
echo $teslaModelX->speedUp();
echo $teslaModelX->changeGears();
echo "\n";

echo $dodgeDart->brake();
echo $dodgeDart->speedUp();
echo $dodgeDart->changeGears();
echo "\n";
