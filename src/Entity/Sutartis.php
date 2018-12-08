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
}
