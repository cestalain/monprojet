<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvres
 *
 * @ORM\Table(name="oeuvres", uniqueConstraints={@ORM\UniqueConstraint(name="ID", columns={"ID"})})
 * @ORM\Entity
 */
class Oeuvres
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="THEME", type="string", length=12, nullable=true)
     */
    private $theme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TAILLE", type="string", length=7, nullable=true)
     */
    private $taille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAPIER", type="string", length=14, nullable=true)
     */
    private $papier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANNEE", type="integer", nullable=true)
     */
    private $annee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPapier(): ?string
    {
        return $this->papier;
    }

    public function setPapier(?string $papier): self
    {
        $this->papier = $papier;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }


}
