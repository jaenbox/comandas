<?php
// src/AppBundle/Entity/Usuario.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @author jaen
 * @ORM\Entity
 * @ORM\Table(name="camarero")
 *
 */
class Camarero extends User {
        
    // Relación de "Camarero --- Pedido" 1:N.
    /**
     * @ORM\OneToMany(targetEntity="Pedido", mappedBy="camarero", cascade={"remove"}, orphanRemoval=true)
     */
    protected $pedidos;
    
    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }
    
    /**
     * Add pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     * @return Camarero
     */
    public function addPedido(\AppBundle\Entity\Pedido $pedidos)
    {
        $this->pedidos[] = $pedidos;
        return $this;
    }
    /**
     * Remove pedido
     *
     * @param \AppBundle\Entity\Pedido $pedidos
     */
    public function removePedido(\AppBundle\Entity\Pedido $pedidos)
    {
        $this->pedidos->removeElement($pedidos);
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
