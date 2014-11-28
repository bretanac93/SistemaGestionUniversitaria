<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Estudiante
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\EstudianteRepository")
 * @ORM\Table()
 */
class Estudiante extends BaseUser implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Edad", type="integer")
     */
    private $edad;

    /**
     * @var decimal
     *
     * @ORM\Column(name="Promedio", type="decimal")
     */
    private $promedio;

    /**
     * @var string
     *
     * @ORM\Column(name="Telf", type="string", length=255)
     */
    private $telf;

    /**
     * @var string
     *
     * @ORM\Column(name="Adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Facultad", type="string", length=255)
     */
    private $facultad;

    /**
     * @var string
     *
     * @ORM\Column(name="Carrera", type="string", length=255)
     */
    private $carrera;

    /**
    * @ORM\Column(name="is_active", type="boolean")
    */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        $this->resultados = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    *@ORM\ManyToMany(targetEntity="Resultado", mappedBy="estudinates")
    */

    protected $resultados;

    public function getResultados()
    {
        return $this->resultados;
    }

    public function addResultados(\Gestion\GestionBundle\Entity
        \Resultado $resultados)
    {
        $this->resultados[] = $resultados;    
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
     * Set nombre
     *
     * @param string $nombre
     * @return Estudiante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Estudiante
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set promedio
     *
     * @param decimal $promedio
     * @return Estudiante
     */
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }

    /**
     * Get promedio
     *
     * @return decimal 
     */
    public function getPromedio()
    {
        return $this->promedio;
    }

    /**
     * Set telf
     *
     * @param string $telf
     * @return Estudiante
     */
    public function setTelf($telf)
    {
        $this->telf = $telf;

        return $this;
    }

    /**
     * Get telf
     *
     * @return string 
     */
    public function getTelf()
    {
        return $this->telf;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Estudiante
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Estudiante
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set facultad
     *
     * @param string $facultad
     * @return Estudiante
     */
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;

        return $this;
    }

    /**
     * Get facultad
     *
     * @return string 
     */
    public function getFacultad()
    {
        return $this->facultad;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Estudiante
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

     public function __toString()
    {
        return $this->getNombre();
    }
    
}
