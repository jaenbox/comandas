<?php
// src/AppBundle/Entity/Cocinero.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\Entity;

/**
 *
 * @author jaen
 * @ORM\Entity
 * @ORM\Table(name="cocinero")
 *
 */
class Cocinero extends User {   
    
}