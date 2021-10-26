<?php

namespace App\Repository;

use App\Entity\Enabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enabels[]    findAll()
 * @method Enabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enabels::class);
    }

    // /**
    //  * @return Enabels[] Returns an array of Enabels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enabels
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
