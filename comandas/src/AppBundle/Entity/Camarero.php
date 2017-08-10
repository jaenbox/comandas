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
        
    // Relación de "Camarero --- Incidencias" 1:N.
    /**
     * @ORM\OneToMany(targetEntity="Comanda", mappedBy="camarero")
     */
    protected $comandas;
    
    public function __construct()
    {
        $this->comandas = new ArrayCollection();
    }
        
}