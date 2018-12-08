<?php

namespace App\Repository;

use App\Entity\Butas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Butas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Butas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Butas[]    findAll()
 * @method Butas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ButasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Butas::class);
    }

    // /**
    //  * @return Butas[] Returns an array of Butas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Butas
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
