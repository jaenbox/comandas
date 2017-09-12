<?php
// src/AppBundle/Entity/Cocinero.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;

/**
 *
 * @author jaen
 * @ORM\Entity
 * @ORM\Table(name="cocinero")
 *
 */
class Cocinero extends User {   
    // Relación de "Pedido --- Pedido" 1:N.
    /**
     * @ORM\OneToMany(targetEntity="Pedido", mappedBy="cocinero", cascade={"remove"}, orphanRemoval=true)
     */
    protected $pedidos;
    
    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }
    
    
    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPedido()
    {
        return $this->pedidos;
    }

    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }
}
