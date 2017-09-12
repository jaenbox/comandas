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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $cantidad;
    
    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotBlank()
     *
     */
    protected $observaciones;
    
    //Relación de "Plato --- Comanda" 1:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Plato", inversedBy="comandas", cascade={"persist"})
     *  @ORM\JoinColumn(name="id_plato", referencedColumnName="id", nullable=true, onDelete="SET NULL")   
     */
    protected $plato;
    
    //Relación de "Pedido --- Comanda" 1:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="comandas", cascade={"persist"})
     * @ORM\JoinColumn(name="id_pedido", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $pedido;

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
     * @return the $cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @return the $observaciones
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @return the $plato
     */
    public function getPlato()
    {
        return $this->plato;
    }

    /**
     * @return the $pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @param field_type $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $plato
     */
    public function setPlato($plato)
    {
        $this->plato = $plato;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $pedido
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;
    }
    
}
