<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_nom", type="string", length=27, nullable=false)
     */
    private $prenomNom;

    public function getIdAuteur(): ?int
    {
        return $this->idAuteur;
    }

    public function getPrenomNom(): ?string
    {
        return $this->prenomNom;
    }

    public function setPrenomNom(string $prenomNom): self
    {
        $this->prenomNom = $prenomNom;

        return $this;
    }


}
