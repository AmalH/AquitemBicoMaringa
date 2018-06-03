<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoVaga
 *
 * @ORM\Table(name="candidato_vaga")
 * @ORM\Entity
 */
class CandidatoVaga
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
     * @ORM\Column(name="ID_vaga", type="integer", nullable=false)
     */
    private $idVaga;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

