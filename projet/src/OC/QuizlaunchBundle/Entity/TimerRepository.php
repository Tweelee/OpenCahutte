<?php

namespace OC\QuizlaunchBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TimerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TimerRepository extends EntityRepository
{
	
	public function getByGamepin($gamepin) {
	
		$qb = $this->createQueryBuilder('t')
			->where('t.gamepin = :gamepin')
				->setParameter('gamepin', $gamepin)
		;
		
		return $qb
		  ->getQuery()
		  ->getResult()
		;
	
	}
}
