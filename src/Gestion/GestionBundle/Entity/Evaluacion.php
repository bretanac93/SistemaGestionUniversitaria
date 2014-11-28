<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gestion\GestionBundle\Entity\Estudiante;
use Gestion\GestionBundle\Entity\Asignatura;
/**
 * Evaluacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\EvaluacionRepository")
 */
class Evaluacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota", type="integer")
     */
    private $nota;

     /**
     *  @ORM\ManyToOne(targetEntity="Asignatura")
     */
    protected $asignatura;

     /**
     *  @ORM\ManyToOne(targetEntity="Estudiante")
     */
    protected $estudiante;

    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function setAsignatura( Asignatura $asignatura)
    {
        $this->asignatura = $asignatura;
        return $this;
    }

    public function getEstudiante()
    {
        return $this->estudiante;
    }

    public function setEstudiante(Estudiante $estudiante)
    {
        $this->estudiante = $estudiante;
        return $this;
    }    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Evaluacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     * @return Evaluacion
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer 
     */
    public function getNota()
    {
        return $this->nota;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
