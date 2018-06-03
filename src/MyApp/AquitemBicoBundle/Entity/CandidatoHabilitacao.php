<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoHabilitacao
 *
 * @ORM\Table(name="candidato_habilitacao")
 * @ORM\Entity
 */
class CandidatoHabilitacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_candidato", type="integer", nullable=false)
     */
    private $idCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoHabilitacao", type="string", length=11, nullable=false)
     */
    private $tipohabilitacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

