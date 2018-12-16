<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkelbimasRepository")
 */
class Skelbimas
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
    private $pavadinimas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skelbimas;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sukurimo_data;

    /**
     * @ORM\Column(type="datetime")
     */
    private $galiojimo_pabaiga;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $kaina;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPavadinimas(): ?string
    {
        return $this->pavadinimas;
    }

    public function setPavadinimas(string $pavadinimas): self
    {
        $this->pavadinimas = $pavadinimas;

        return $this;
    }

    public function getSkelbimas(): ?string
    {
        return $this->skelbimas;
    }

    public function setSkelbimas(string $skelbimas): self
    {
        $this->skelbimas = $skelbimas;

        return $this;
    }

    public function getSukurimoData(): ?\DateTimeInterface
    {
        return $this->sukurimo_data;
    }

    public function setSukurimoData(\DateTimeInterface $sukurimo_data): self
    {
        $this->sukurimo_data = $sukurimo_data;

        return $this;
    }

    public function getGaliojimoPabaiga(): ?\DateTimeInterface
    {
        return $this->galiojimo_pabaiga;
    }

    public function setGaliojimoPabaiga(\DateTimeInterface $galiojimo_pabaiga): self
    {
        $this->galiojimo_pabaiga = $galiojimo_pabaiga;

        return $this;
    }

    public function getKaina()
    {
        return $this->kaina;
    }

    public function setKaina($kaina): self
    {
        $this->kaina = $kaina;

        return $this;
    }
}
