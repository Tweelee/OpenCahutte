<?php

namespace OC\SynchroBundle\Synchro;

class RedirectionProcessor
{
  // M�thode pour rediriger
  public function redirect()
  {
		return $this->redirect($this->generateUrl('oc_synchro_homepage3'));
  }
}