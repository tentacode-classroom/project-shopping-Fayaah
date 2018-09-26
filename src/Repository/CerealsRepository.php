<?php

namespace App\Repository;

use Entity\Cereals;

class CerealsRepository
{
  private $cereals;

  public function __construct()
  {
    $cereal1 = new Cereals();
    $cereal1->setId(1);
    $cereal1->setName('Coco Pops');

    $cereal2 = new Cereals();
    $cereal2->setId(2);
    $cereal2->setName('Cookie Crisps');

    $cereal3 = new Cereals();
    $cereal3->setId(3);
    $cereal3->setName('Frosties');

    $this->cereals =
    [
      $cereal1,
      $cereal2,
      $cereal3,
    ];
  }

  public function findAll(): array
  {
    return $this->cereals;
  }

  public function findOneById(int $id): Cereals
  {
      foreach($this->cereals as $cereal) {
          if ($cereal->getId() === $id) {
              return $this->cereal;
          }
      }
  }
}

 ?>
