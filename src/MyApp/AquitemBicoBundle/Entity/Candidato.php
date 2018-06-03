<?php

namespace MyApp\AquitemBicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use MyApp\UserBundle\Entity\User;

/**
 * Candidato
 *
 * @ORM\Table(name="candidato")
 * @ORM\Entity
 * @UniqueEntity(fields = "email", targetClass = "MyApp\UserBundle\Entity\User")
 */
class Candidato extends User
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_candidato", type="string", length=255, nullable=false)
     */
    private $senhaCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_candidato", type="string", length=255, nullable=false)
     */
    private $nomeCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_candidato", type="string", length=255, nullable=false)
     */
    private $cpfCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_candidato", type="string", length=255, nullable=false)
     */
    private $rgCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="data_expedicao_candidato", type="string", length=255, nullable=false)
     */
    private $dataExpedicaoCandidato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento_candidato", type="date", nullable=false)
     */
    private $dataNascimentoCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo_candidato", type="string", length=255, nullable=false)
     */
    private $sexoCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil_candidato", type="string", length=255, nullable=false)
     */
    private $estadoCivilCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="deficiencia_candidato", type="string", length=255, nullable=false)
     */
    private $deficienciaCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="viagem_candidatodato", type="string", length=255, nullable=false)
     */
    private $viagemCandidatodato;

    /**
     * @var string
     *
     * @ORM\Column(name="fumante_candidatodato", type="string", length=255, nullable=false)
     */
    private $fumanteCandidatodato;

    /**
     * @var string
     *
     * @ORM\Column(name="filhos_candidato", type="string", length=255, nullable=false)
     */
    private $filhosCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1_candidato", type="string", length=255, nullable=false)
     */
    private $tel1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2_candidato", type="string", length=255, nullable=false)
     */
    private $tel2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_candidato", type="string", length=255, nullable=false)
     */
    private $enderecoCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_candidato", type="string", length=255, nullable=false)
     */
    private $bairroCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_candidato", type="string", length=255, nullable=false)
     */
    private $cepCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_candidato", type="string", length=255, nullable=false)
     */
    private $complementoCandidato;

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
     * @ORM\Column(name="facebook_candidato", type="string", length=255, nullable=false)
     */
    private $facebookCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="escolaridade_candidato", type="string", length=255, nullable=false)
     */
    private $escolaridadeCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel_escolar_candidato", type="string", length=255, nullable=false)
     */
    private $nivelEscolarCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="area_profissional_candidato", type="string", length=255, nullable=false)
     */
    private $areaProfissionalCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="maquinas_candidato", type="text", length=65535, nullable=false)
     */
    private $maquinasCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="programas_candidato", type="text", length=65535, nullable=false)
     */
    private $programasCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="informatica_candidato", type="string", length=255, nullable=false)
     */
    private $informaticaCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ingles_candidato", type="string", length=255, nullable=false)
     */
    private $inglesCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="espanhol_candidato", type="string", length=255, nullable=false)
     */
    private $espanholCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cursos_complementares_candidato", type="text", length=65535, nullable=false)
     */
    private $cursosComplementaresCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_habilitacao_candidato", type="string", length=255, nullable=false)
     */
    private $numeroHabilitacaoCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_pessoal1_candidato", type="string", length=255, nullable=false)
     */
    private $refPessoal1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_parentesco1_candidato", type="string", length=255, nullable=false)
     */
    private $refParentesco1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_tel1_candidato", type="string", length=255, nullable=false)
     */
    private $refTel1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_pessoal2_candidato", type="string", length=255, nullable=false)
     */
    private $refPessoal2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_parentesco2_candidato", type="string", length=255, nullable=false)
     */
    private $refParentesco2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_tel2_candidato", type="string", length=255, nullable=false)
     */
    private $refTel2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="trabalho_atual_candidato", type="string", length=255, nullable=false)
     */
    private $trabalhoAtualCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_empresa_candidato", type="string", length=255, nullable=false)
     */
    private $refEmpresaCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="telemp_candidato", type="string", length=255, nullable=false)
     */
    private $telempCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_trab_candidato", type="string", length=255, nullable=false)
     */
    private $enderecoTrabCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_empresa_candidato", type="string", length=255, nullable=false)
     */
    private $cargoEmpresaCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_trab_candidato", type="string", length=255, nullable=false)
     */
    private $horarioTrabCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_emp1_candidato", type="string", length=255, nullable=false)
     */
    private $nomeEmp1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_emp1_candidato", type="string", length=255, nullable=false)
     */
    private $telEmp1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_emp1_candidato", type="string", length=255, nullable=false)
     */
    private $cargoEmp1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tempo_emp1_candidato", type="string", length=255, nullable=false)
     */
    private $tempoEmp1Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_emp2_candidato", type="string", length=255, nullable=false)
     */
    private $nomeEmp2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_emp2_candidato", type="string", length=255, nullable=false)
     */
    private $telEmp2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_emp2_candidato", type="string", length=255, nullable=false)
     */
    private $cargoEmp2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tempo_emp2_candidato", type="string", length=255, nullable=false)
     */
    private $tempoEmp2Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_emp3_candidato", type="string", length=255, nullable=false)
     */
    private $nomeEmp3Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_emp3_candidato", type="string", length=255, nullable=false)
     */
    private $telEmp3Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_emp3_candidato", type="string", length=255, nullable=false)
     */
    private $cargoEmp3Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="tempo_emp3_candidato", type="string", length=255, nullable=false)
     */
    private $tempoEmp3Candidato;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_candidato", type="text", length=65535, nullable=false)
     */
    private $observacaoCandidato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="date", nullable=false)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


}

