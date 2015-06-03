<?php

namespace OC\QuizgenBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QCMRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QCMRepository extends EntityRepository
{

public function getQbyIdq($idq,$quiz) {
	
		$question = $this->createQueryBuilder('q')
			->where('q.idq=:idq')
			->setParameter('idq', $idq)
			->andWhere('q.quiz=:quiz')
			->setParameter('quiz', $quiz)
		;

		return $question
		  ->getQuery()
		  ->getResult()
		;
	
	}
}
