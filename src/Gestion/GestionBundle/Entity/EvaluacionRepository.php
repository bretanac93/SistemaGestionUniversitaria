<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EvaluacionRepository extends EntityRepository
{
	public function GettingType($AsignaturaId)
	{
		$query = $this->getEntityManager()->createQuery("SELECT a.tipo FROM GestionBundle:Asignatura a JOIN GestionBundle:Evaluacion e where a.id = :AsignaturaId and e.asignatura = :AsignaturaId");
   		$query->setParameter('AsignaturaId', $AsignaturaId);
		return $query->getSingleScalarResult();
	}
	
}