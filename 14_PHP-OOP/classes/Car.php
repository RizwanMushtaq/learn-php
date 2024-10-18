<?php

/* A class is ablueprint or template
 Based on this blueprint, we can print as many cars as we want
 class contain properties and methods
 Visibility Modifiers -> whop has access to these properties and methods
 private -> only this class has access to this property or method
 protected -> only this class and child classes have access to this property or method
 public -> Everone have access to this property or method
 properties are also called as fields */

class Car
{
  private string $brand;
  private string $color;
  private string $vehicleType;

  //constructor -> its a method, it will run whenever an object is created
  public function __construct($brand, $color = 'none', $vehicleType = 'pkw')
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->vehicleType = $vehicleType;
  }

  //Getters and Setters
  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getColor()
  {
    return $this->color;
  }
  public function setColor(string $color)
  {
    $allowedColors = ['red', 'blue', 'yellow'];
    if (in_array($color, $allowedColors)) {
      $this->color = $color;
    }
  }

  public function getVehicleType()
  {
    return $this->vehicleType;
  }

  public function setVehicleType(string $vehicleType)
  {
    $this->vehicleType = $vehicleType;
  }
}

