<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pres
 *
 * @ORM\Table(name="pres")
 * @ORM\Entity
 */
class Pres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prete_a", type="string", length=27, nullable=false)
     */
    private $preteA;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_du_pres", type="datetime", nullable=false)
     */
    private $dateDuPres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPreteA(): ?string
    {
        return $this->preteA;
    }

    public function setPreteA(string $preteA): self
    {
        $this->preteA = $preteA;

        return $this;
    }

    public function getDateDuPres(): ?\DateTimeInterface
    {
        return $this->dateDuPres;
    }

    public function setDateDuPres(\DateTimeInterface $dateDuPres): self
    {
        $this->dateDuPres = $dateDuPres;

        return $this;
    }


}
