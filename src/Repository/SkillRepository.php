<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class SkillRepository extends EntityRepository
{
    public function findAllEnabled()
    {
        $b = $this->createQueryBuilder('s');

        return $b
            ->select('s, m, z')
            ->innerJoin('s.skillMainCategory', 'm')
            ->leftJoin('s.skillSecondaryCategory', 'z')
            ->where('s.enabled = TRUE')
            ->addOrderBy('m.order')
            ->addOrderBy('z.order')
            ->addOrderBy('s.score', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

}