<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Initiation
 *
 * @ORM\Table(name="initiation")
 * @ORM\Entity
 */
class Initiation
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
     * @ORM\Column(name="document", type="string", length=255, nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_hdr_msg_id", type="string", length=255, nullable=true)
     */
    private $grpHdrMsgId;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_hdr_cre_dt_tm", type="datetime")
     */
    private $grpHdrCreDtTm;

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
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * @param string $document
     */
    public function setDocument(string $document): void
    {
        $this->document = $document;
    }

    /**
     * @return string
     */
    public function getGrpHdrMsgId(): string
    {
        return $this->grpHdrMsgId;
    }

    /**
     * @param string $grpHdrMsgId
     */
    public function setGrpHdrMsgId(string $grpHdrMsgId): void
    {
        $this->grpHdrMsgId = $grpHdrMsgId;
    }

    /**
     * @return string
     */
    public function getGrpHdrCreDtTm(): string
    {
        if($this->grpHdrCreDtTm)
            return $this->grpHdrCreDtTm->format(\DateTime::ISO8601);
        return $this->grpHdrCreDtTm;
    }

    /**
     * @param string $grpHdrCreDtTm
     */
    public function setGrpHdrCreDtTm(string $grpHdrCreDtTm): void
    {
        $this->grpHdrCreDtTm = $grpHdrCreDtTm;
    }



}
