<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoVeiculo
 *
 * @ORM\Table(name="candidato_veiculo")
 * @ORM\Entity
 */
class CandidatoVeiculo
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
     * @ORM\Column(name="veiculo", type="string", length=255, nullable=false)
     */
    private $veiculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

