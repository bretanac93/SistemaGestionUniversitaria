<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AsignaturaRepository extends EntityRepository
{
	public function ProfesorAsignatura($ProfesorId)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery("SELECT a.name FROM GestionBundle:Asignatura a where a.profesor = :ProfesorId");
		$query->setParameter('ProfesorId' , $ProfesorId);
		return $query->getResult();
	}
}