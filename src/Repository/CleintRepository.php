<?php

namespace App\Repository;

use App\Entity\Cleint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cleint>
 *
 * @method Cleint|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cleint|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cleint[]    findAll()
 * @method Cleint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CleintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cleint::class);
    }

    //    /**
    //     * @return Cleint[] Returns an array of Cleint objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Cleint
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
