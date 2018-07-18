<?php

namespace AppBundle\Repository;

/**
 * associationCoProRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecetteRepository extends \Doctrine\ORM\EntityRepository
{
    public function findRecetteByTitre($titre){
        $fields = array('i.id', 'i.titre', 'i.preparation', 'i.ingredients');
        return $this->createQueryBuilder('i')
            ->select($fields)
            ->andWhere('i.titre LIKE :titre')
            ->orWhere('i.preparation LIKE :preparation')
            ->orWhere('i.ingredients LIKE :ingredients')
            ->setParameter('titre', '%'.$titre.'%')
            ->getQuery()
            ->getResult()
            ;
    }
}
