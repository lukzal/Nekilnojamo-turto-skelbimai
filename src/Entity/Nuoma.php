<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NuomaRepository")
 */
class Nuoma
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $kaina_per_menesi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKainaPerMenesi()
    {
        return $this->kaina_per_menesi;
    }

    public function setKainaPerMenesi($kaina_per_menesi): self
    {
        $this->kaina_per_menesi = $kaina_per_menesi;

        return $this;
    }
}
