<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoEmpresa
 *
 * @ORM\Table(name="historico_empresa")
 * @ORM\Entity
 */
class HistoricoEmpresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_candidato", type="integer", nullable=false)
     */
    private $idCandidato;

    /**
     * @var float
     *
     * @ORM\Column(name="avaliacao", type="float", precision=10, scale=0, nullable=false)
     */
    private $avaliacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

