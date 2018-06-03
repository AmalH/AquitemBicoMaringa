<?php
// src/AppBundle/Entity/User.php

namespace MyApp\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"candidato" = "Candidato", "empresa" = "Empresa"})
 */
class User extends BaseUser
{   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
}
