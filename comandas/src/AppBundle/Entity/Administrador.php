<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Administrador;
use AppBundle\Entity\Camarero;

/**
 *
 * @author jaen
 * @ORM\Entity
 * @ORM\Table(name="administrador")
 *
 */
class Administrador extends User {
    
    // Relación de "Administrador --- Comandas" 1:N.
    /**
     * @ORM\OneToMany(targetEntity="Comanda", mappedBy="administrador")
     */
    protected $comandas;
    
    public function __construct()
    {
        $this->comandas = new ArrayCollection();        
    }
    
    /**
     * Add comanda
     *
     * @param \AppBundle\Entity\Comanda $incidencias
     * @return Administrador
     */
    public function addComanda(\AppBundle\Entity\Comanda $comandas)
    {
        $this->comandas[] = $comandas;
        return $this;
    }
}