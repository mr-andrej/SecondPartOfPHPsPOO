<?php

// car.php
require_once 'vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];



    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
}



    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}