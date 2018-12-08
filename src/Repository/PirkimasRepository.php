<?php

namespace App\Repository;

use App\Entity\Pirkimas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pirkimas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pirkimas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pirkimas[]    findAll()
 * @method Pirkimas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PirkimasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pirkimas::class);
    }

    // /**
    //  * @return Pirkimas[] Returns an array of Pirkimas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pirkimas
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
