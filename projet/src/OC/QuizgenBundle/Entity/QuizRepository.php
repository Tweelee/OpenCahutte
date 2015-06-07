<?php

namespace OC\QuizgenBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QuizRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuizRepository extends EntityRepository
{
	public function getQuizWithQCMs($id) {
	
		$qb = $this->createQueryBuilder('q')
			->where('q.id=:id')
				->setParameter('id', $id)
		;


		return $qb
		  ->getQuery()
		  ->getResult()
		;
	
	}
}
