<?php
// src/AppBundle/Entity/Comanda.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @author jaen
 *
 * @ORM\Entity
 * @ORM\Table(name="comanda")
 *
 */
class Comanda {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotBlank()
     *
     */
    protected $observaciones;
    /**
     * @ORM\Column(name="pagado", type="boolean")
     */
    protected $isPagado;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="notblank")
     * @Assert\Choice(
     * 		choices = {"cocina", "servido"}
     * )
     */
    protected $estado;
    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     * @Assert\NotBlank()
     */
    protected $fecha;
    
    //Relación de "Camarero --- Comanda" 1:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Camarero", inversedBy="comanda")
     * @ORM\JoinColumn(name="camarero_id", referencedColumnName="id", nullable=false)
     */
    protected $camarero;
    
    //Relación de "Plato --- Comanda" N:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Plato", inversedBy="comanda")     
     */
    protected $plato;
    
    //Relación de "Mesa --- Comanda" 1:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Mesa", inversedBy="comanda")
     * @ORM\JoinColumn(name="mesa_id", referencedColumnName="id", nullable=false)
     */
    protected $mesa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plato = new ArrayCollection();
    }
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $observaciones
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @return the $pagado
     */
    public function getPagado()
    {
        return $this->isPagado;
    }

    /**
     * @return the $camarero
     */
    public function getCamarero()
    {
        return $this->camarero;
    }

    /**
     * @return the $plato
     */
    public function getPlato()
    {
        return $this->plato;
    }

    /**
     * @return the $mesa
     */
    public function getMesa()
    {
        return $this->mesa;
    }

    /**
     * @return the $estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get fecha
     * 
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @param field_type $pagado
     */
    public function setPagado($pagado)
    {
        $this->isPagado = $pagado;
    }

    /**
     * @param field_type $camarero
     */
    public function setCamarero(\AppBundle\Entity\Camarero $camarero = null)
    {
        return $this->camarero = $camarero;
    }

    /**
     * @param field_type $plato
     */
    public function setPlato($plato)
    {
        $this->plato = $plato;
    }

    /**
     * @param field_type $mesa
     */
    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }

    /**
     * @param field_type $estado
     */
    public function setEstado($estado)
    {
        return $this->estado = $estado;
    }
    
    /**
     * @param field_type $fecha
     */
    public function setFecha(\DateTime $fecha = null)
    {
        return $this->fecha = $fecha;
    }

    /**
     * Add platos
     *
     * @param \AppBundle\Entity\Plato $plato
     * @return User
     */
    public function addRole(\AppBundle\Entity\Plato $plato)
    {
        $this->plato[] = $plato;
        return $this;
    }
    /**
     * Remove plato
     *
     * @param \AppBundle\Entity\Plato $plato
     */
    public function removeRole(\AppBundle\Entity\Plato $plato)
    {
        $this->plato->removeElement($plato);
    }
    /**
     * Get plato
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->plato->toArray();
    }
}


