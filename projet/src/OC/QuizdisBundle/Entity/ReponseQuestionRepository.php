<?php

namespace OC\QuizdisBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReponseQuestionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReponseQuestionRepository extends EntityRepository
{
	public function getReponsesUtilisateur($gamepin,$user,$hdebut,$hfin) {
	
		$qb = $this->createQueryBuilder('r')
			->where('r.gamepin = :gamepin')
				->setParameter('gamepin', $gamepin)
			->andWhere('r.user = :user')
				->setParameter('user', $user)
			->andWhere('r.time < :hfin')
				->setParameter('hfin', $hfin)
			->andWhere('r.time > :hdebut')
				->setParameter('hdebut', $hdebut)
		;
		
		return $qb
		  ->getQuery()
		  ->getResult()
		;
	
	}
}