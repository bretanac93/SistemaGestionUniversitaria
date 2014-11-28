<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Resultado
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
     * @ORM\Column(name="Valor", type="string", length=255)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="Puntuacion", type="decimal")
     */
    private $puntuacion;

    /**
     *  @ORM\ManyToOne(targetEntity="Actividad")
     */
    private $actividad; 

    /**
    *@ORM\ManyToMany(targetEntity="Estudiante", inversedBy="resultados" )
    *@ORM\JoinTable{name="resultado_estudiante",
    *joinColumns=(@ORM\JoinColum(name="resultado_id" , referencedColumnName="id")},
    * inverseJoinColumns={@ORM\JoinColumn(name="estudiante_id", referencedColumnName="id")}
    */    
    protected $estudiantes;
    
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
     * Set valor
     *
     * @param string $valor
     * @return Resultado
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set puntuacion
     *
     * @param string $puntuacion
     * @return Resultado
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return string 
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }
}
