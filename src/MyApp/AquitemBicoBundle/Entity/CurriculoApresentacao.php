<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurriculoApresentacao
 *
 * @ORM\Table(name="curriculo_apresentacao")
 * @ORM\Entity
 */
class CurriculoApresentacao
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255, nullable=false)
     */
    private $cidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

