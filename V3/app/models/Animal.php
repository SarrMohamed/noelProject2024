<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="animals")
 */
class Animal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string")
     */
    private $sante;

    /**
     * @ORM\Column(type="integer")
     */
    private $equipementId;

    // Getter et Setter pour l'ID
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    // Getter et Setter pour le Type
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    // Getter et Setter pour l'Age
    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    // Getter et Setter pour la Santé
    public function getSante(): ?string
    {
        return $this->sante;
    }

    public function setSante(string $sante): self
    {
        $this->sante = $sante;
        return $this;
    }

    // Getter et Setter pour l'ID Equipement
    public function getEquipementId(): ?int
    {
        return $this->equipementId;
    }

    public function setEquipementId(int $equipementId): self
    {
        $this->equipementId = $equipementId;
        return $this;
    }
}
