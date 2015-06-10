<?php
namespace OC\QuizdisBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifGamepinExists extends Constraint{

	
	public function validatedBy()
	{
		return 'oc_quizdis_verifgamepinexists'; // Ici, on fait appel à l'alias du service
	}
	
	public function getTargets()
	{
		return self::CLASS_CONSTRAINT;
	}
  
}