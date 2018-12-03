<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlokavimaiRepository")
 */
class Blokavimai
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $priezastis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $baigiasi;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Naudotojai", inversedBy="uzblokuotas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $naudotojo_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPriezastis(): ?string
    {
        return $this->priezastis;
    }

    public function setPriezastis(string $priezastis): self
    {
        $this->priezastis = $priezastis;

        return $this;
    }

    public function getBaigiasi(): ?\DateTimeInterface
    {
        return $this->baigiasi;
    }

    public function setBaigiasi(\DateTimeInterface $baigiasi): self
    {
        $this->baigiasi = $baigiasi;

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

    public function getNaudotojoId(): ?Naudotojai
    {
        return $this->naudotojo_id;
    }

    public function setNaudotojoId(?Naudotojai $naudotojo_id): self
    {
        $this->naudotojo_id = $naudotojo_id;

        return $this;
    }
}
