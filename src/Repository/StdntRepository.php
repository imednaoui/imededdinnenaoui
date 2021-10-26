<?php

namespace App\Repository;

use App\Entity\Stdnt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stdnt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stdnt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stdnt[]    findAll()
 * @method Stdnt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StdntRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stdnt::class);
    }

    // /**
    //  * @return Stdnt[] Returns an array of Stdnt objects
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
    public function findOneBySomeField($value): ?Stdnt
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
