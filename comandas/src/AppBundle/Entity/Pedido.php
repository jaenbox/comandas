<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @author jaen
 * @ORM\Entity
 * @ORM\Table(name="pedido")
 *
 */
class Pedido {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     * @Assert\NotBlank()
     */
    protected $fecha;
    /**
     * @ORM\Column(name="pagado", type="boolean", nullable=true)
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
        
    //Relación de "Mesa --- Comanda" 1:N con la asignación de metadatos, método "Annotations".
    /**
     * @ORM\ManyToOne(targetEntity="Mesa", inversedBy="pedidos", cascade={"persist"})
     * @ORM\JoinColumn(name="id_mesa", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $mesa;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="pedidos", cascade={"persist"})
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $users;
    
    /**
     * @ORM\OneToMany(targetEntity="Comanda", mappedBy="pedido", cascade={"remove"}, orphanRemoval=true)
     * 
     */
    protected $comandas;
    
    /**
     * Constructor
     */
    public function __construct()
    {   
        $this->comandas = new ArrayCollection();
    }
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return the $isPagado
     */
    public function getIsPagado()
    {
        return $this->isPagado;
    }

    /**
     * @return the $estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return the $camarero
     */
    public function getCamarero()
    {
        return $this->camarero;
    }

    /**
     * @return the $mesa
     */
    public function getMesa()
    {
        return $this->mesa;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @param field_type $isPagado
     */
    public function setIsPagado($isPagado)
    {
        $this->isPagado = $isPagado;
    }

    /**
     * @param field_type $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @param field_type $camarero
     */
    public function setCamarero($camarero)
    {
        $this->camarero = $camarero;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $mesa
     */
    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }

    /**
     * Add comanda
     *
     * @param \AppBundle\Entity\Comanda $comandas
     * @return Pedido
     */
    public function addComanda(\AppBundle\Entity\Comanda $comandas)
    {
        $this->comandas[] = $comandas;
        return $this;
    }
    /**
     * Remove comanda
     *
     * @param \AppBundle\Entity\Comanda $comandas
     */
    public function removeComanda(\AppBundle\Entity\Comanda $comandas)
    {
        $this->pedidos->removeElement($comandas);
    }
    /**
     * Get comandas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPedido()
    {
        return $this->comandas;
    }
    /**
     * @return the $users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return the $comandas
     */
    public function getComandas()
    {
        return $this->comandas;
    }

    /**
     * @param field_type $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $comandas
     */
    public function setComandas($comandas)
    {
        $this->comandas = $comandas;
    }

    
}
