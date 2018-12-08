<?php

namespace App\Repository;

use App\Entity\NekilnojamasTurtas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NekilnojamasTurtas|null find($id, $lockMode = null, $lockVersion = null)
 * @method NekilnojamasTurtas|null findOneBy(array $criteria, array $orderBy = null)
 * @method NekilnojamasTurtas[]    findAll()
 * @method NekilnojamasTurtas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NekilnojamasTurtasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NekilnojamasTurtas::class);
    }

    // /**
    //  * @return NekilnojamasTurtas[] Returns an array of NekilnojamasTurtas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NekilnojamasTurtas
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
