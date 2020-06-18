<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table(name="editeur")
 * @ORM\Entity
 */
class Editeur
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
     * @ORM\Column(name="nom_editeur", type="string", length=27, nullable=false)
     */
    private $nomEditeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEditeur(): ?string
    {
        return $this->nomEditeur;
    }

    public function setNomEditeur(string $nomEditeur): self
    {
        $this->nomEditeur = $nomEditeur;

        return $this;
    }


}
