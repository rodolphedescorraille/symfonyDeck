<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListCardsDeckRepository")
 */
class ListCardsDeck
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
    private $number;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDCard;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDDeck;

    public function __construct()
    {
        $this->IDCard = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Card[]
     */
    public function getIDCard(): Collection
    {
        return $this->IDCard;
    }

    public function addIDCard(Card $iDCard): self
    {
        if (!$this->IDCard->contains($iDCard)) {
            $this->IDCard[] = $iDCard;
            $iDCard->setListCardsDeck($this);
        }

        return $this;
    }

    public function removeIDCard(Card $iDCard): self
    {
        if ($this->IDCard->contains($iDCard)) {
            $this->IDCard->removeElement($iDCard);
            // set the owning side to null (unless already changed)
            if ($iDCard->getListCardsDeck() === $this) {
                $iDCard->setListCardsDeck(null);
            }
        }

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function setIDCard(int $IDCard): self
    {
        $this->IDCard = $IDCard;

        return $this;
    }

    public function getIDDeck(): ?int
    {
        return $this->IDDeck;
    }

    public function setIDDeck(int $IDDeck): self
    {
        $this->IDDeck = $IDDeck;

        return $this;
    }
}
