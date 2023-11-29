<?php

namespace App\Repository;

use App\Entity\YourBundleYourEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<YourBundleYourEntity>
 *
 * @method YourBundleYourEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method YourBundleYourEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method YourBundleYourEntity[]    findAll()
 * @method YourBundleYourEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YourBundleYourEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YourBundleYourEntity::class);
    }

    public function save(YourBundleYourEntity $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(YourBundleYourEntity $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return YourBundleYourEntity[] Returns an array of YourBundleYourEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('y')
//            ->andWhere('y.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('y.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?YourBundleYourEntity
//    {
//        return $this->createQueryBuilder('y')
//            ->andWhere('y.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
