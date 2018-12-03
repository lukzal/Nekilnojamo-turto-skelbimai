<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NaudotojaiRepository")
 */
class Naudotojai
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naudotojo_vardas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vardas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pavarde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $el_pastas;

    /**
     * @ORM\Column(type="integer")
     */
    private $asmens_kodas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Blokavimai", mappedBy="naudotojo_id")
     */
    private $uzblokuotas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slaptazodis;

    public function __construct()
    {
        $this->uzblokuotas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaudotojoVardas(): ?string
    {
        return $this->naudotojo_vardas;
    }

    public function setNaudotojoVardas(string $naudotojo_vardas): self
    {
        $this->naudotojo_vardas = $naudotojo_vardas;

        return $this;
    }

    public function getVardas(): ?string
    {
        return $this->vardas;
    }

    public function setVardas(string $vardas): self
    {
        $this->vardas = $vardas;

        return $this;
    }

    public function getPavarde(): ?string
    {
        return $this->pavarde;
    }

    public function setPavarde(string $pavarde): self
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    public function getElPastas(): ?string
    {
        return $this->el_pastas;
    }

    public function setElPastas(string $el_pastas): self
    {
        $this->el_pastas = $el_pastas;

        return $this;
    }

    public function getAsmensKodas(): ?int
    {
        return $this->asmens_kodas;
    }

    public function setAsmensKodas(int $asmens_kodas): self
    {
        $this->asmens_kodas = $asmens_kodas;

        return $this;
    }

    public function getTelefonoNr(): ?string
    {
        return $this->telefono_nr;
    }

    public function setTelefonoNr(string $telefono_nr): self
    {
        $this->telefono_nr = $telefono_nr;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection|Blokavimai[]
     */
    public function getUzblokuotas(): Collection
    {
        return $this->uzblokuotas;
    }

    public function addUzblokuota(Blokavimai $uzblokuota): self
    {
        if (!$this->uzblokuotas->contains($uzblokuota)) {
            $this->uzblokuotas[] = $uzblokuota;
            $uzblokuota->setNaudotojoId($this);
        }

        return $this;
    }

    public function removeUzblokuota(Blokavimai $uzblokuota): self
    {
        if ($this->uzblokuotas->contains($uzblokuota)) {
            $this->uzblokuotas->removeElement($uzblokuota);
            // set the owning side to null (unless already changed)
            if ($uzblokuota->getNaudotojoId() === $this) {
                $uzblokuota->setNaudotojoId(null);
            }
        }

        return $this;
    }

    public function getSlaptazodis(): ?string
    {
        return $this->slaptazodis;
    }

    public function setSlaptazodis(string $slaptazodis): self
    {
        $this->slaptazodis = $slaptazodis;

        return $this;
    }
}
