<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"}), @ORM\Index(name="id_genre", columns={"id_genre"})})
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255, nullable=false)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="nbr_page", type="string", length=255, nullable=false)
     */
    private $nbrPage;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_genre", referencedColumnName="id_genre")
     * })
     */
    private $idGenre;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $editeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collection;

    public function getIdLivre(): ?int
    {
        return $this->idLivre;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNbrPage(): ?string
    {
        return $this->nbrPage;
    }

    public function setNbrPage(string $nbrPage): self
    {
        $this->nbrPage = $nbrPage;

        return $this;
    }

    public function getIdGenre(): ?Genre
    {
        return $this->idGenre;
    }

    public function setIdGenre(?Genre $idGenre): self
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    public function getIdAuteur(): ?Personne
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(?Personne $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function __toString()
    {
        return $this->titre;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setCollection(string $collection): self
    {
        $this->collection = $collection;

        return $this;
    }


}
