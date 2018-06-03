<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoArea
 *
 * @ORM\Table(name="candidato_area")
 * @ORM\Entity
 */
class CandidatoArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_candidato", type="integer", nullable=false)
     */
    private $idCandidato;

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

