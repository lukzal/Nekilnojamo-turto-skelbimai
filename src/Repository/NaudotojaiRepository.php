<?php

namespace App\Repository;

use App\Entity\Naudotojai;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Naudotojai|null find($id, $lockMode = null, $lockVersion = null)
 * @method Naudotojai|null findOneBy(array $criteria, array $orderBy = null)
 * @method Naudotojai[]    findAll()
 * @method Naudotojai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaudotojaiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Naudotojai::class);
    }

    // /**
    //  * @return Naudotojai[] Returns an array of Naudotojai objects
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
    public function findOneBySomeField($value): ?Naudotojai
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
