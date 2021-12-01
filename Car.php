<?php

require 'Vehicle.php';

class Car extends Vehicle
{


}
$Polo=new Car();
$Polo->setNumberOfWheels('4');
$Polo->setNumberOfSeats('5');
$Polo->setColor('blue');
$Polo->setBrand('VW');
$Polo->setIsStarted('false');
$Polo->setIsTankEmpty('true');
$Polo->stop('false');
$Polo->start('true','false');