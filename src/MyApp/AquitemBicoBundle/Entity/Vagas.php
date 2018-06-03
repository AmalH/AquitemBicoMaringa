<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vagas
 *
 * @ORM\Table(name="vagas")
 * @ORM\Entity
 */
class Vagas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_vaga", type="string", length=255, nullable=false)
     */
    private $nomeVaga;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=255, nullable=false)
     */
    private $local;

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
     * @var integer
     *
     * @ORM\Column(name="numero_vagas", type="integer", nullable=false)
     */
    private $numeroVagas;

    /**
     * @var string
     *
     * @ORM\Column(name="horario1", type="string", length=255, nullable=false)
     */
    private $horario1;

    /**
     * @var string
     *
     * @ORM\Column(name="horario2", type="string", length=255, nullable=false)
     */
    private $horario2;

    /**
     * @var string
     *
     * @ORM\Column(name="horario3", type="string", length=255, nullable=false)
     */
    private $horario3;

    /**
     * @var string
     *
     * @ORM\Column(name="horario4", type="string", length=255, nullable=false)
     */
    private $horario4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="remuneracao", type="string", length=255, nullable=false)
     */
    private $remuneracao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=false)
     */
    private $observacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="date", nullable=false)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255, nullable=false)
     */
    private $telefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    function getNomeVaga() {
        return $this->nomeVaga;
    }

    function getLocal() {
        return $this->local;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getNumeroVagas() {
        return $this->numeroVagas;
    }

    function getHorario1() {
        return $this->horario1;
    }

    function getHorario2() {
        return $this->horario2;
    }

    function getHorario3() {
        return $this->horario3;
    }

    function getHorario4() {
        return $this->horario4;
    }

    function getData() { //: \DateTime
        return $this->data;
    }

    function getRemuneracao() {
        return $this->remuneracao;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getIdEmpresa() {
        return $this->idEmpresa;
    }

    function getDataCadastro() { //: \DateTime
        return $this->dataCadastro;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getId() {
        return $this->id;
    }

    function setNomeVaga($nomeVaga) {
        $this->nomeVaga = $nomeVaga;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setNumeroVagas($numeroVagas) {
        $this->numeroVagas = $numeroVagas;
    }

    function setHorario1($horario1) {
        $this->horario1 = $horario1;
    }

    function setHorario2($horario2) {
        $this->horario2 = $horario2;
    }

    function setHorario3($horario3) {
        $this->horario3 = $horario3;
    }

    function setHorario4($horario4) {
        $this->horario4 = $horario4;
    }

    function setData(\DateTime $data) {
        $this->data = $data;
    }

    function setRemuneracao($remuneracao) {
        $this->remuneracao = $remuneracao;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    function setIdEmpresa($idEmpresa) {
        $this->idEmpresa = $idEmpresa;
    }

    function setDataCadastro(\DateTime $dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setId($id) {
        $this->id = $id;
    }
}

