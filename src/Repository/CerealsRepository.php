<?php

namespace App\Repository;

use App\Entity\Cereals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cereals|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cereals|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cereals[]    findAll()
 * @method Cereals[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CerealsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cereals::class);
    }

    public function orderProductByPrice()
    {
        $qb = $this->createQueryBuilder('p')
            ->orderBy('p.price', 'ASC')
            ->setMaxResults(3)
            ->getQuery();

        return $qb->execute();
    }
//    /**
//     * @return Cereals[] Returns an array of Cereals objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cereals
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
