<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\EntityRepository;



class EstudianteRepository extends EntityRepository
{
	public function findPromedio($EstudianteId)
	{
		$query =  $this->getEntityManager()->createQuery("SELECT AVG(e.nota) FROM GestionBundle:Evaluacion e where e.estudiante= :EstudianteId and e.tipo = :TIPO");
		$query->setParameter('EstudianteId', $EstudianteId);
		$query->setParameter('TIPO', 'PF');
		return $query->getResult();
	}
}