<?php

namespace App\Repository;

use App\Entity\Sutartis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Sutartis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sutartis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sutartis[]    findAll()
 * @method Sutartis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SutartisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sutartis::class);
    }

    // /**
    //  * @return Sutartis[] Returns an array of Sutartis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sutartis
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
