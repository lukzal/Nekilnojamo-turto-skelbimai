<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NamasRepository")
 */
class Namas
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
    private $sklypo_plotas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSklypoPlotas(): ?int
    {
        return $this->sklypo_plotas;
    }

    public function setSklypoPlotas(int $sklypo_plotas): self
    {
        $this->sklypo_plotas = $sklypo_plotas;

        return $this;
    }
}
