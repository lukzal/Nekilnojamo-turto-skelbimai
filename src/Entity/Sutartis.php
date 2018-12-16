<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SutartisRepository")
 */
class Sutartis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $papildomos_salygos;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\NekilnojamasTurtas", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $bustas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Naudotojai")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klientas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nuoma")
     */
    private $kaina_per_menesi;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pirkimas")
     */
    private $kaina;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getPapildomosSalygos(): ?string
    {
        return $this->papildomos_salygos;
    }

    public function setPapildomosSalygos(?string $papildomos_salygos): self
    {
        $this->papildomos_salygos = $papildomos_salygos;

        return $this;
    }

    public function getBustas(): ?NekilnojamasTurtas
    {
        return $this->bustas;
    }

    public function setBustas(NekilnojamasTurtas $bustas): self
    {
        $this->bustas = $bustas;

        return $this;
    }

    public function getKlientas(): ?Naudotojai
    {
        return $this->klientas;
    }

    public function setKlientas(?Naudotojai $klientas): self
    {
        $this->klientas = $klientas;

        return $this;
    }

    public function getKainaPerMenesi(): ?Nuoma
    {
        return $this->kaina_per_menesi;
    }

    public function setKainaPerMenesi(?Nuoma $kaina_per_menesi): self
    {
        $this->kaina_per_menesi = $kaina_per_menesi;

        return $this;
    }

    public function getKaina(): ?Pirkimas
    {
        return $this->kaina;
    }

    public function setKaina(?Pirkimas $kaina): self
    {
        $this->kaina = $kaina;

        return $this;
    }
}
