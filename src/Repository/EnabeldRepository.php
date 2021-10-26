<?php

namespace App\Repository;

use App\Entity\Enabeld;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enabeld|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enabeld|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enabeld[]    findAll()
 * @method Enabeld[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnabeldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enabeld::class);
    }

    // /**
    //  * @return Enabeld[] Returns an array of Enabeld objects
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
    public function findOneBySomeField($value): ?Enabeld
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
