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
 * @ORM\Table(name="plato")
 * @ORM\HasLifecycleCallbacks
 */
class Plato {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank()
     *
     */
    protected $name;
    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    protected $price;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    protected $path;
    /**
     * @ORM\Column(type="text")
     */
    protected $description;
    /**
     * @Assert\File(maxSize="6000000")
     */
    protected $file;    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="notblank")
	 * @Assert\Choice(
	 * 		choices = {"al", "co", "ce"})
     */
    protected $category;
    /**
     * @ORM\ManyToMany(targetEntity="Comanda", mappedBy="plato")
     */
    protected $comandas;
    
    public function __construct()
    {
        $this->comandas = new ArrayCollection();
    }
    
    
    private $temp;
    
    
    
    // Getters & Setters
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @return the $img
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @param field_type $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @param field_type $img
     */
    public function setPath($file)
    {
        $this->path = $file;
    }
    
    /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
    }
    
    /**
     * @return the $categoria
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param field_type $categoria
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (is_file($this->getAbsolutePath())) {
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePath();
        } else {
            $this->path = 'initial';
        }
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path
        ? null
        : $this->getUploadRootDir().'/'.$this->id.'.'.$this->path;
    }
    
    public function getWebPath()
    {
        return null === $this->path
        ? null
        : $this->getUploadDir().'/'.$this->path;
    }
    
    protected function getUploadRootDir()
    {
        // la ruta absoluta del directorio donde se deben
        // guardar los archivos cargados
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
        // se deshace del __DIR__ para no meter la pata
        // al mostrar el documento/imagen cargada en la vista.
        return 'uploads/documents';
    }
     
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            $this->path = $this->getFile()->guessExtension();
        }
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }
        
        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        
        // you must throw an exception here if the file cannot be moved
        // so that the entity is not persisted to the database
        // which the UploadedFile move() method does
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->id.'.'.$this->getFile()->guessExtension()
            );
        
        $this->setFile(null);
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->temp = $this->getAbsolutePath();
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (isset($this->temp)) {
            unlink($this->temp);
        }
    }
    
    /**
     * Add comanda
     *
     * @param \AppBundle\Entity\Comanda $comanda
     * @return Roles
     */
    public function addComanda(\AppBundle\Entity\Comanda $comandas)
    {
        $this->comandas[] = $comandas;
        return $this;
    }
    /**
     * Remove comandas
     *
     * @param \AppBundle\Entity\Comanda $comandas
     */
    public function removeUser(\AppBundle\Entity\Comanda $comandas)
    {
        $this->comandas->removeElement($comandas);
    }
    /**
     * Get comandas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComandas()
    {
        return $this->comandas;
    }

    /**
     * Remove comanda
     *
     * @param \AppBundle\Entity\Comanda $comanda
     */
    public function removeComanda(\AppBundle\Entity\Comanda $comandas)
    {
        $this->comandas->removeElement($comandas);
    }
}
