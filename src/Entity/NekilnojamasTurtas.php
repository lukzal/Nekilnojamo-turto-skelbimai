<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NekilnojamasTurtasRepository")
 */
class NekilnojamasTurtas
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
    private $namo_numeris;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Naudotojai")
     * @ORM\JoinColumn(nullable=false)
     */
    private $naudotojas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Butas")
     */
    private $buto_numeris;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Namas")
     */
    private $sklypo_plotas;

    /**
     * @ORM\Column(type="integer")
     */
    private $plotas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kambariu_skaicius;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pastato_tipas;

    /**
     * @ORM\Column(type="datetime")
     */
    private $metai;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sildymas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $apsauga;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gatves_numeris;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $miestas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aukstai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamoNumeris(): ?int
    {
        return $this->namo_numeris;
    }

    public function setNamoNumeris(int $namo_numeris): self
    {
        $this->namo_numeris = $namo_numeris;

        return $this;
    }

    public function getNaudotojas(): ?Naudotojai
    {
        return $this->naudotojas;
    }

    public function setNaudotojas(?Naudotojai $naudotojas): self
    {
        $this->naudotojas = $naudotojas;

        return $this;
    }

    public function getButoNumeris(): ?Butas
    {
        return $this->buto_numeris;
    }

    public function setButoNumeris(?Butas $buto_numeris): self
    {
        $this->buto_numeris = $buto_numeris;

        return $this;
    }

    public function getSklypoPlotas(): ?Namas
    {
        return $this->sklypo_plotas;
    }

    public function setSklypoPlotas(?Namas $sklypo_plotas): self
    {
        $this->sklypo_plotas = $sklypo_plotas;

        return $this;
    }

    public function getPlotas(): ?int
    {
        return $this->plotas;
    }

    public function setPlotas(int $plotas): self
    {
        $this->plotas = $plotas;

        return $this;
    }

    public function getKambariuSkaicius(): ?int
    {
        return $this->kambariu_skaicius;
    }

    public function setKambariuSkaicius(?int $kambariu_skaicius): self
    {
        $this->kambariu_skaicius = $kambariu_skaicius;

        return $this;
    }

    public function getPastatoTipas(): ?string
    {
        return $this->pastato_tipas;
    }

    public function setPastatoTipas(?string $pastato_tipas): self
    {
        $this->pastato_tipas = $pastato_tipas;

        return $this;
    }

    public function getMetai(): ?\DateTimeInterface
    {
        return $this->metai;
    }

    public function setMetai(\DateTimeInterface $metai): self
    {
        $this->metai = $metai;

        return $this;
    }

    public function getSildymas(): ?string
    {
        return $this->sildymas;
    }

    public function setSildymas(?string $sildymas): self
    {
        $this->sildymas = $sildymas;

        return $this;
    }

    public function getApsauga(): ?string
    {
        return $this->apsauga;
    }

    public function setApsauga(?string $apsauga): self
    {
        $this->apsauga = $apsauga;

        return $this;
    }

    public function getGatvesNumeris(): ?string
    {
        return $this->gatves_numeris;
    }

    public function setGatvesNumeris(string $gatves_numeris): self
    {
        $this->gatves_numeris = $gatves_numeris;

        return $this;
    }

    public function getMiestas(): ?string
    {
        return $this->miestas;
    }

    public function setMiestas(string $miestas): self
    {
        $this->miestas = $miestas;

        return $this;
    }

    public function getAukstai(): ?int
    {
        return $this->aukstai;
    }

    public function setAukstai(?int $aukstai): self
    {
        $this->aukstai = $aukstai;

        return $this;
    }
}
