<?php
// src/AppBundle/Entity/Plato.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @author jaen
 *
 * @ORM\Entity
 * @ORM\Table(name="mesa")
 * 
 */
class Mesa {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="integer", length=20)
     * @Assert\NotBlank()
     *
     */
    protected $num;
    /**
     * @ORM\Column(type="integer", length=20)
     * @Assert\NotBlank()
     *
     */
    protected $comensales;
    
    /**
     * @ORM\OneToMany(targetEntity="Pedido", mappedBy="mesa", cascade={"remove"}, orphanRemoval=true)
     * 
     */
    protected $pedidos;
    
    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $comensales
     */
    public function getComensales()
    {
        return $this->comensales;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $comensales
     */
    public function setComensales($comensales)
    {
        $this->comensales = $comensales;
    }
    /**
     * @return the $num
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param field_type $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    

    /**
     * Add pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return Mesa
     */
    public function addPedido(\AppBundle\Entity\Pedido $pedido)
    {
        $this->pedidos[] = $pedido;

        return $this;
    }

    /**
     * Remove pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     */
    public function removePedido(\AppBundle\Entity\Pedido $pedido)
    {
        $this->pedidos->removeElement($pedido);
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
