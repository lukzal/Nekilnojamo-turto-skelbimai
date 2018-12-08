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
     * @ORM\Column(type="integer")
     */
    private $numeris;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $papildomos_salygos;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pirkimas", cascade={"persist", "remove"})
     */
    private $pirkimas;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Sutartis", cascade={"persist", "remove"})
     */
    private $nuoma;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\NekilnojamasTurtas", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $nekilnojamas_turtas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klientas")
     */
    private $klientas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeris(): ?int
    {
        return $this->numeris;
    }

    public function setNumeris(int $numeris): self
    {
        $this->numeris = $numeris;

        return $this;
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

    public function getPirkimas(): ?Pirkimas
    {
        return $this->pirkimas;
    }

    public function setPirkimas(?Pirkimas $pirkimas): self
    {
        $this->pirkimas = $pirkimas;

        return $this;
    }

    public function getNuoma(): ?self
    {
        return $this->nuoma;
    }

    public function setNuoma(?self $nuoma): self
    {
        $this->nuoma = $nuoma;

        return $this;
    }

    public function getNekilnojamasTurtas(): ?NekilnojamasTurtas
    {
        return $this->nekilnojamas_turtas;
    }

    public function setNekilnojamasTurtas(NekilnojamasTurtas $nekilnojamas_turtas): self
    {
        $this->nekilnojamas_turtas = $nekilnojamas_turtas;

        return $this;
    }

    public function getKlientas(): ?Klientas
    {
        return $this->klientas;
    }

    public function setKlientas(?Klientas $klientas): self
    {
        $this->klientas = $klientas;

        return $this;
    }
}
