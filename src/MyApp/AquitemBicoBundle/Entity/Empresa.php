<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyApp\UserBundle\Entity\User;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 * @UniqueEntity(fields = "email", targetClass = "MyApp\UserBundle\Entity\User", message="fos_user.email.already_used")
 * @UniqueEntity(fields = "senhaEmpresa", targetClass = "MyApp\UserBundle\Entity\User", message="fos_user.password.blank")
 */
class Empresa extends User
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_empresa", type="string", length=255, nullable=false)
     */
    private $senhaEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="rs_empresa", type="string", length=255, nullable=false)
     */
    private $rsEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_empresa", type="string", length=255, nullable=false)
     */
    private $nomeEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_empresa", type="string", length=255, nullable=false)
     */
    private $cnpjEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="insc_estadual_empresa", type="string", length=255, nullable=false)
     */
    private $inscEstadualEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="area_empresa", type="string", length=255, nullable=false)
     */
    private $areaEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel_empresa", type="string", length=255, nullable=false)
     */
    private $responsavelEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="porte_empresa", type="string", length=255, nullable=false)
     */
    private $porteEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="site_empresa", type="string", length=255, nullable=false)
     */
    private $siteEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_empresa", type="text", length=65535, nullable=false)
     */
    private $descricaoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pessoa", type="string", length=255, nullable=false)
     */
    private $nomePessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_pessoa", type="string", length=255, nullable=false)
     */
    private $cpfPessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_pessoa", type="string", length=255, nullable=false)
     */
    private $rgPessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="data_nasci", type="string", length=255, nullable=false)
     */
    private $dataNasci;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_contato", type="string", length=255, nullable=false)
     */
    private $respContato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1_empresa", type="string", length=255, nullable=false)
     */
    private $tel1Empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2_empresa", type="string", length=255, nullable=false)
     */
    private $tel2Empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_empresa", type="string", length=255, nullable=false)
     */
    private $enderecoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_empresa", type="string", length=255, nullable=false)
     */
    private $bairroEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_empresa", type="string", length=255, nullable=false)
     */
    private $cepEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_empresa", type="string", length=255, nullable=false)
     */
    private $complementoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_empresa", type="string", length=255, nullable=false)
     */
    private $facebookEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="logomarca_arquivo", type="string", length=255, nullable=false)
     */
    private $logomarcaArquivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="date", nullable=false)
     */
    private $dataCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_expira", type="date", nullable=false)
     */
    private $dataExpira;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pacote", type="string", length=255, nullable=false)
     */
    private $nomePacote;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


}

