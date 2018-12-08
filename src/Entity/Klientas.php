<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlientasRepository")
 */
class Klientas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Naudotojai")
     */
    private $naudotojas;

    public function __construct()
    {
        $this->naudotojas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Naudotojai[]
     */
    public function getNaudotojas(): Collection
    {
        return $this->naudotojas;
    }

    public function addNaudotojas(Naudotojai $naudotoja): self
    {
        if (!$this->naudotojas->contains($naudotoja)) {
            $this->naudotojas[] = $naudotoja;
        }

        return $this;
    }

    public function removeNaudotojas(Naudotojai $naudotoja): self
    {
        if ($this->naudotojas->contains($naudotoja)) {
            $this->naudotojas->removeElement($naudotoja);
        }

        return $this;
    }
}
