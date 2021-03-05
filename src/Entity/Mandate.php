<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mandate
 *
 * @ORM\Table(name="mandate")
 * @ORM\Entity
 */
class Mandate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mndt_Id", type="string", length=36, nullable=true)
     */
    private $mndtId;

    /**
     * @var string
     *
     * @ORM\Column(name="mndt_req_id", type="string", length=255, nullable=true)
     */
    private $mndtReqId;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_svc_lvl_cd", type="string", length=255, nullable=true)
     */
    private $tpSvcLvlCd;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_lcl_instrm_cd", type="string", length=255, nullable=true)
     */
    private $tpLclInstrmCd;

    /**
     * @var string
     *
     * @ORM\Column(name="ocrncs_seq_tp", type="string", length=255, nullable=true)
     */
    private $ocrncsSeqTp;

    /**
     * @var string
     *
     * @ORM\Column(name="cdtr_schme_id_prvt_id", type="string", length=255, nullable=true)
     */
    private $cdtrSchmeIdPrvtId;

    /**
     * @var string
     *
     * @ORM\Column(name="cdtr_nm", type="string", length=255, nullable=true)
     */
    private $cdtrNm;

    /**
     * @var string
     *
     * @ORM\Column(name="cdtr_pstl_adr_ctry", type="string", length=255, nullable=true)
     */
    private $cdtrPstlAdrCtry;

    /**
     * @var string
     *
     * @ORM\Column(name="cdtr_pstl_adr_adr_line", type="string", length=255, nullable=true)
     */
    private $cdtrPstlAdrAdrLine;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_cdtr_nm", type="string", length=255, nullable=true)
     */
    private $ultmtCdtrNm;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_cdtr_org_id", type="string", length=255, nullable=true)
     */
    private $ultmtCdtrOrgId;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_cdtr_prvt_id", type="string", length=255, nullable=true)
     */
    private $ultmtCdtrPrvtId;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_nm", type="string", length=255, nullable=true)
     */
    private $dbtrNm;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_pstl_adr_ctry", type="string", length=255, nullable=true)
     */
    private $dbtrPstlAdrCtry;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_pstl_adr_line", type="string", length=255, nullable=true)
     */
    private $dbtrPstlAdrLine;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_org_id", type="string", length=255, nullable=true)
     */
    private $dbtrOrgId;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_prvt_id", type="string", length=255, nullable=true)
     */
    private $dbtrPrvtId;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_acct_iban", type="string", length=255, nullable=true)
     */
    private $dbtrAcctIBAN;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_agt_fin_instn_id_bic", type="string", length=255, nullable=true)
     */
    private $dbtrAgtFinInstnIdBIC;

    /**
     * @var string
     *
     * @ORM\Column(name="dbtr_agt_fin_instn_id_othr_id", type="string", length=255, nullable=true)
     */
    private $dbtrAgtFinInstnIdOthrId;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_dbtr_nm", type="string", length=255, nullable=true)
     */
    private $ultmtDbtrNm;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_dbtr_org_id", type="string", length=255, nullable=true)
     */
    private $ultmtDbtrOrgId;

    /**
     * @var string
     *
     * @ORM\Column(name="ultmt_dbtr_prvt_id", type="string", length=255, nullable=true)
     */
    private $ultmtDbtrPrvtId;

    /**
     * @var string
     *
     * @ORM\Column(name="rfrd_doc_nb", type="string", length=255, nullable=true)
     */
    private $rfrdDocNb;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getMndtId(): string
    {
        return $this->mndtId;
    }

    /**
     * @param string $mndtId
     */
    public function setMndtId(string $mndtId): void
    {
        $this->mndtId = $mndtId;
    }

    /**
     * @return string
     */
    public function getMndtReqId(): string
    {
        return $this->mndtReqId;
    }

    /**
     * @param string $mndtReqId
     */
    public function setMndtReqId(string $mndtReqId): void
    {
        $this->mndtReqId = $mndtReqId;
    }

    /**
     * @return string
     */
    public function getTpSvcLvlCd(): string
    {
        return $this->tpSvcLvlCd;
    }

    /**
     * @param string $tpSvcLvlCd
     */
    public function setTpSvcLvlCd(string $tpSvcLvlCd): void
    {
        $this->tpSvcLvlCd = $tpSvcLvlCd;
    }

    /**
     * @return string
     */
    public function getTpLclInstrmCd(): string
    {
        return $this->tpLclInstrmCd;
    }

    /**
     * @param string $tpLclInstrmCd
     */
    public function setTpLclInstrmCd(string $tpLclInstrmCd): void
    {
        $this->tpLclInstrmCd = $tpLclInstrmCd;
    }

    /**
     * @return string
     */
    public function getOcrncsSeqTp(): string
    {
        return $this->ocrncsSeqTp;
    }

    /**
     * @param string $ocrncsSeqTp
     */
    public function setOcrncsSeqTp(string $ocrncsSeqTp): void
    {
        $this->ocrncsSeqTp = $ocrncsSeqTp;
    }

    /**
     * @return string
     */
    public function getCdtrSchmeIdPrvtId(): string
    {
        return $this->cdtrSchmeIdPrvtId;
    }

    /**
     * @param string $cdtrSchmeIdPrvtId
     */
    public function setCdtrSchmeIdPrvtId(string $cdtrSchmeIdPrvtId): void
    {
        $this->cdtrSchmeIdPrvtId = $cdtrSchmeIdPrvtId;
    }

    /**
     * @return string
     */
    public function getCdtrNm(): string
    {
        return $this->cdtrNm;
    }

    /**
     * @param string $cdtrNm
     */
    public function setCdtrNm(string $cdtrNm): void
    {
        $this->cdtrNm = $cdtrNm;
    }

    /**
     * @return string
     */
    public function getCdtrPstlAdrCtry(): string
    {
        return $this->cdtrPstlAdrCtry;
    }

    /**
     * @param string $cdtrPstlAdrCtry
     */
    public function setCdtrPstlAdrCtry(string $cdtrPstlAdrCtry): void
    {
        $this->cdtrPstlAdrCtry = $cdtrPstlAdrCtry;
    }

    /**
     * @return string
     */
    public function getCdtrPstlAdrAdrLine(): string
    {
        return $this->cdtrPstlAdrAdrLine;
    }

    /**
     * @param string $cdtrPstlAdrAdrLine
     */
    public function setCdtrPstlAdrAdrLine(string $cdtrPstlAdrAdrLine): void
    {
        $this->cdtrPstlAdrAdrLine = $cdtrPstlAdrAdrLine;
    }

    /**
     * @return string
     */
    public function getUltmtCdtrNm(): string
    {
        return $this->ultmtCdtrNm;
    }

    /**
     * @param string $ultmtCdtrNm
     */
    public function setUltmtCdtrNm(string $ultmtCdtrNm): void
    {
        $this->ultmtCdtrNm = $ultmtCdtrNm;
    }

    /**
     * @return string?null
     */
    public function getUltmtCdtrOrgId(): ?string
    {
        return $this->ultmtCdtrOrgId;
    }

    /**
     * @param string $ultmtCdtrOrgId
     */
    public function setUltmtCdtrOrgId(string $ultmtCdtrOrgId): void
    {
        $this->ultmtCdtrOrgId = $ultmtCdtrOrgId;
    }

    /**
     * @return string|null
     */
    public function getUltmtCdtrPrvtId(): ?string
    {
        return $this->ultmtCdtrPrvtId;
    }

    /**
     * @param string $ultmtCdtrPrvtId
     */
    public function setUltmtCdtrPrvtId(string $ultmtCdtrPrvtId): void
    {
        $this->ultmtCdtrPrvtId = $ultmtCdtrPrvtId;
    }

    /**
     * @return string
     */
    public function getDbtrNm(): string
    {
        return $this->dbtrNm;
    }

    /**
     * @param string $dbtrNm
     */
    public function setDbtrNm(string $dbtrNm): void
    {
        $this->dbtrNm = $dbtrNm;
    }

    /**
     * @return string
     */
    public function getDbtrPstlAdrCtry(): string
    {
        return $this->dbtrPstlAdrCtry;
    }

    /**
     * @param string $dbtrPstlAdrCtry
     */
    public function setDbtrPstlAdrCtry(string $dbtrPstlAdrCtry): void
    {
        $this->dbtrPstlAdrCtry = $dbtrPstlAdrCtry;
    }

    /**
     * @return string
     */
    public function getDbtrPstlAdrLine(): string
    {
        return $this->dbtrPstlAdrLine;
    }

    /**
     * @param string $dbtrPstlAdrLine
     */
    public function setDbtrPstlAdrLine(string $dbtrPstlAdrLine): void
    {
        $this->dbtrPstlAdrLine = $dbtrPstlAdrLine;
    }

    /**
     * @return string|null
     */
    public function getDbtrOrgId(): ?string
    {
        return $this->dbtrOrgId;
    }

    /**
     * @param string $dbtrOrgId
     */
    public function setDbtrOrgId(string $dbtrOrgId): void
    {
        $this->dbtrOrgId = $dbtrOrgId;
    }

    /**
     * @return string|null
     */
    public function getDbtrPrvtId(): ?string
    {
        return $this->dbtrPrvtId;
    }

    /**
     * @param string $dbtrPrvtId
     */
    public function setDbtrPrvtId(string $dbtrPrvtId): void
    {
        $this->dbtrPrvtId = $dbtrPrvtId;
    }

    /**
     * @return string
     */
    public function getDbtrAcctIBAN(): string
    {
        return $this->dbtrAcctIBAN;
    }

    /**
     * @param string $dbtrAcctIBAN
     */
    public function setDbtrAcctIBAN(string $dbtrAcctIBAN): void
    {
        $this->dbtrAcctIBAN = $dbtrAcctIBAN;
    }

    /**
     * @return string
     */
    public function getDbtrAgtFinInstnIdBIC(): string
    {
        return $this->dbtrAgtFinInstnIdBIC;
    }

    /**
     * @param string $dbtrAgtFinInstnIdBIC
     */
    public function setDbtrAgtFinInstnIdBIC(string $dbtrAgtFinInstnIdBIC): void
    {
        $this->dbtrAgtFinInstnIdBIC = $dbtrAgtFinInstnIdBIC;
    }

    /**
     * @return string
     */
    public function getDbtrAgtFinInstnIdOthrId(): string
    {
        return $this->dbtrAgtFinInstnIdOthrId;
    }

    /**
     * @param string $dbtrAgtFinInstnIdOthrId
     */
    public function setDbtrAgtFinInstnIdOthrId(string $dbtrAgtFinInstnIdOthrId): void
    {
        $this->dbtrAgtFinInstnIdOthrId = $dbtrAgtFinInstnIdOthrId;
    }

    /**
     * @return string
     */
    public function getUltmtDbtrNm(): string
    {
        return $this->ultmtDbtrNm;
    }

    /**
     * @param string $ultmtDbtrNm
     */
    public function setUltmtDbtrNm(string $ultmtDbtrNm): void
    {
        $this->ultmtDbtrNm = $ultmtDbtrNm;
    }

    /**
     * @return string|null
     */
    public function getUltmtDbtrOrgId(): ?string
    {
        return $this->ultmtDbtrOrgId;
    }

    /**
     * @param string $ultmtDbtrOrgId
     */
    public function setUltmtDbtrOrgId(string $ultmtDbtrOrgId): void
    {
        $this->ultmtDbtrOrgId = $ultmtDbtrOrgId;
    }

    /**
     * @return string|null
     */
    public function getUltmtDbtrPrvtId(): ?string
    {
        return $this->ultmtDbtrPrvtId;
    }

    /**
     * @param string $ultmtDbtrPrvtId
     */
    public function setUltmtDbtrPrvtId(string $ultmtDbtrPrvtId): void
    {
        $this->ultmtDbtrPrvtId = $ultmtDbtrPrvtId;
    }

    /**
     * @return string
     */
    public function getRfrdDocNb(): string
    {
        return $this->rfrdDocNb;
    }

    /**
     * @param string $rfrdDocNb
     */
    public function setRfrdDocNb(string $rfrdDocNb): void
    {
        $this->rfrdDocNb = $rfrdDocNb;
    }


}
