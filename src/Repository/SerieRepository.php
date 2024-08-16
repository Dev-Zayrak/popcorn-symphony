<?php

namespace App\Repository;

use App\Entity\Serie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Serie>
 */
class SerieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Serie::class);
    }


    public function findBestSeriesWithSpecificGenre(array $genres) :array {
        $q = $this->createQueryBuilder('s')
            ->orderBy('s.vote', 'DESC')
            ->addOrderBy('s.popularity', 'DESC')
            ->addOrderBy('s.name', 'ASC')
            ->andWhere('s.name like :terme or s.firstAirDate < :airDate')
            ->setParameter(':terme', '%non%')
            ->setParameter(':airDate', new \DateTime('2018-01-01 00:00:00'))
            ->andWhere('s.status = :status')
            ->setParameter(':status', 'Returning');

        $q->andWhere('s.genres in (:genres)')
            ->setParameter(':genres',  $genres);


        $expr = $q->expr();

        $cond1 = $expr->like('s.name', ':terme2');
        $cond2 = $expr->gte('s.firstAirDate', ':seuil'); //gte = greater then equal

        $q->andWhere($expr->orX($cond1, $cond2));
        $q->setParameter(':seuil', new \DateTime('2010-01-01'));
        $q->setParameter(':terme2', '%u%');

        //$q->groupBy('YEAR(s.firstAirDate) = 2018');

            return $q->getQuery()
                ->getResult();

    }


    public function getBestSeriesInDQL():array{
        $dql = "SELECT s FROM App\Entity\Serie AS s 
            WHERE s.name LIKE :terme AND s.vote > 6 
            OR (s.popularity > 50 AND s.firstAirDate >= '2019-01-01')
            ORDER BY s.vote DESC, s.popularity DESC";

        return $this->getEntityManager()->createQuery($dql)
            ->setParameter('terme', '%non%')
            ->execute();

    }



    public function getBestSeriesInRawSQL():array{
        $sql = "SELECT *, first_air_date as firstAirDate, last_air_date as lastAirDate, date_created as dateCreated, date_modified as dateModified  
                FROM serie as s WHERE s.first_air_date > :seuil ORDER BY s.popularity DESC";
        $connexion = $this->getEntityManager()->getConnection();
        return $connexion->prepare($sql)
            ->executeQuery(['seuil' => '2018-02-14'])
            ->fetchAllAssociative();
    }

    //    /**
    //     * @return Serie[] Returns an array of Serie objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Serie
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
