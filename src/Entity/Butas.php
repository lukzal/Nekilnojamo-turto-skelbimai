<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ButasRepository")
 */
class Butas
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
    private $buto_numeris;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getButoNumeris(): ?int
    {
        return $this->buto_numeris;
    }

    public function setButoNumeris(int $buto_numeris): self
    {
        $this->buto_numeris = $buto_numeris;

        return $this;
    }
}
