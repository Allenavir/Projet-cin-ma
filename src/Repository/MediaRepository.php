<?php

namespace App\Repository;

use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class MediaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Media::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findByFilm($id){
        return $this->createQueryBuilder('media')
            ->where('media.film = :value')->setParameter('value', $id)
            ->getQuery()
            ->getResult()
        ;
    }
        
}


