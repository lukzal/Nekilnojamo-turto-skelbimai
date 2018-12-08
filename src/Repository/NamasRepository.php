<?php

namespace App\Repository;

use App\Entity\Namas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Namas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Namas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Namas[]    findAll()
 * @method Namas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NamasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Namas::class);
    }

    // /**
    //  * @return Namas[] Returns an array of Namas objects
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
    public function findOneBySomeField($value): ?Namas
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
