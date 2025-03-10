<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehiculeInterface;

class VehiculeFactory
{
    public function createVehicule(string $type): VehiculeInterface
    {
        switch ($type) {
            case 'bicycle':
                return new Bicycle(0.1, 'human');
            case 'car':
                return new Car(0.5, 'gasoline');
            case 'truck':
                return new Truck(1.0, 'diesel');
            default:
                throw new \InvalidArgumentException("Unknown vehicle type");
        }
    }

    public function createVehiculeByCriteria(float $distance, float $weight): VehiculeInterface
    {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0.1, 'human');
        } elseif ($weight < 200) {
            return new Car(0.5, 'gasoline');
        } else {
            return new Truck(1.0, 'diesel');
        }
    }
}