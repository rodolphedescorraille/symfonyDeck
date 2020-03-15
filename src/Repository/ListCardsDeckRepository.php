<?php

namespace App\Repository;

use App\Entity\ListCardsDeck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ListCardsDeck|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListCardsDeck|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListCardsDeck[]    findAll()
 * @method ListCardsDeck[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListCardsDeckRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListCardsDeck::class);
    }

    // /**
    //  * @return ListCardsDeck[] Returns an array of ListCardsDeck objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListCardsDeck
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
