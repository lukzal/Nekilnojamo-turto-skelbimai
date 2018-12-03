<?php

namespace App\Repository;

use App\Entity\Blokavimai;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Blokavimai|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blokavimai|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blokavimai[]    findAll()
 * @method Blokavimai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlokavimaiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Blokavimai::class);
    }

    // /**
    //  * @return Blokavimai[] Returns an array of Blokavimai objects
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
    public function findOneBySomeField($value): ?Blokavimai
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
