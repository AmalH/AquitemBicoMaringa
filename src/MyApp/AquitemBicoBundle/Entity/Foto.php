<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto")
 * @ORM\Entity
 */
class Foto
{
    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_album", type="integer", nullable=false)
     */
    private $idAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

