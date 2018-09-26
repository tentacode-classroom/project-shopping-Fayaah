<?php

class Cereals
{
  private $id;
  private $name;
  private $brand;
  private $price;

  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function getId($id)
  {
    return $this->id;
  }
  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function getName($name)
  {
    return $this->name;
  }

  public function setBrand(string $brand)
  {
    $this->brand = $brand;
  }

  public function getBrand($brand)
  {
    return $this->brand;
  }

  public function setPrice(string $price)
  {
    $this->price = $price;
  }

  public function getPrice($price)
  {
    return $this->price;
  }
}

 ?>
