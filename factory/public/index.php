<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Factory\VehiculeFactory;

$factory = new VehiculeFactory();

try {
    $bicycle = $factory->createVehicule('bicycle');
    $car = $factory->createVehicule('car');
    $truck = $factory->createVehicule('truck');

    echo "Bicycle: Cost per Km = " . $bicycle->getCostPerKm() . ", Fuel Type = " . $bicycle->getFuelType() . "\n";
    echo "Car: Cost per Km = " . $car->getCostPerKm() . ", Fuel Type = " . $car->getFuelType() . "\n";
    echo "Truck: Cost per Km = " . $truck->getCostPerKm() . ", Fuel Type = " . $truck->getFuelType() . "\n";

    // Example using createVehiculeByCriteria
    $vehicleByCriteria = $factory->createVehiculeByCriteria(15, 10);
    echo "Vehicle by Criteria (15km, 10kg): Cost per Km = " . $vehicleByCriteria->getCostPerKm() . ", Fuel Type = " . $vehicleByCriteria->getFuelType() . "\n";

    $vehicleByCriteria = $factory->createVehiculeByCriteria(25, 150);
    echo "Vehicle by Criteria (25km, 150kg): Cost per Km = " . $vehicleByCriteria->getCostPerKm() . ", Fuel Type = " . $vehicleByCriteria->getFuelType() . "\n";

    $vehicleByCriteria = $factory->createVehiculeByCriteria(30, 250);
    echo "Vehicle by Criteria (30km, 250kg): Cost per Km = " . $vehicleByCriteria->getCostPerKm() . ", Fuel Type = " . $vehicleByCriteria->getFuelType() . "\n";
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}