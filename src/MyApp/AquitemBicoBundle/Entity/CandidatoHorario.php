<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoHorario
 *
 * @ORM\Table(name="candidato_horario")
 * @ORM\Entity
 */
class CandidatoHorario
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
     * @ORM\Column(name="dia_semana", type="string", length=255, nullable=false)
     */
    private $diaSemana;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_1", type="string", length=11, nullable=false)
     */
    private $horario1;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_2", type="string", length=11, nullable=false)
     */
    private $horario2;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_3", type="string", length=11, nullable=false)
     */
    private $horario3;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_4", type="string", length=11, nullable=false)
     */
    private $horario4;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

