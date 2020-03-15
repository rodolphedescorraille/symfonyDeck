<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardRepository")
 */
class Card
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $HP;

    /**
     * @ORM\Column(type="integer")
     */
    private $AP;

    /**
     * @ORM\Column(type="integer")
     */
    private $DP;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="Cards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $image;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHP(): ?int
    {
        return $this->HP;
    }

    public function setHP(int $HP): self
    {
        $this->HP = $HP;

        return $this;
    }

    public function getAP(): ?int
    {
        return $this->AP;
    }

    public function setAP(int $AP): self
    {
        $this->AP = $AP;

        return $this;
    }

    public function getDP(): ?int
    {
        return $this->DP;
    }

    public function setDP(int $DP): self
    {
        $this->DP = $DP;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getListCardsDeck(): ?ListCardsDeck
    {
        return $this->listCardsDeck;
    }

    public function setListCardsDeck(?ListCardsDeck $listCardsDeck): self
    {
        $this->listCardsDeck = $listCardsDeck;

        return $this;
    }
}
