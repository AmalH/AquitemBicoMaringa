<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VagaArea
 *
 * @ORM\Table(name="vaga_area")
 * @ORM\Entity
 */
class VagaArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_vaga", type="integer", nullable=false)
     */
    private $idVaga;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_area", type="integer", nullable=false)
     */
    private $idArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

