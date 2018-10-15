<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Cereals;

class ShoppingFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product1 = new Cereals();
        $product1->setName('Coco Pops');
        $product1->setPrice(15);
        $manager->persist($product1);

        $product2 = new Cereals();
        $product2->setName('Frosties');
        $product2->setPrice(6);
        $manager->persist($product2);

        $product3 = new Cereals();
        $product3->setName('Cookie Crisps');
        $product3->setPrice(12);
        $manager->persist($product3);

        $product4 = new Cereals();
        $product4->setName('Miel Pops');
        $product4->setPrice(3);
        //$product4->setImg('https://i.skyrock.net/0298/79770298/pics/3097863431_1_15_UQURfPVs.jpg');
        $manager->persist($product4);

        $product = new Cereals();
        $product->setName('Chokella');
        $product->setPrice(5.5);
        $manager->persist($product);

        $manager->flush();
    }
}
