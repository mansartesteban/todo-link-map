<?php

namespace App\Repository;

use App\Entity\CardChecklist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CardChecklist|null find($id, $lockMode = null, $lockVersion = null)
 * @method CardChecklist|null findOneBy(array $criteria, array $orderBy = null)
 * @method CardChecklist[]    findAll()
 * @method CardChecklist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CardChecklistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CardChecklist::class);
    }

    // /**
    //  * @return CardChecklist[] Returns an array of CardChecklist objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CardChecklist
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
