<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PirkimasRepository")
 */
class Pirkimas
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
    private $kaina;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Sutartis", mappedBy="kaina", cascade={"persist", "remove"})
     */
    private $sutartis;

    public function getId(): ?int
    {
        return $this->id;
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
