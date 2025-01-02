<?php

namespace App\Controllers;

use App\Entities\Equipement;
use Doctrine\ORM\EntityManagerInterface;

class EquipementController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllEquipements(): array
    {
        return $this->entityManager->getRepository(Equipement::class)->findAll();
    }

    public function createEquipement(string $nom, string $etat, bool $disponibilite): void
    {
        $equipement = new Equipement();
        $equipement->setNom($nom)
                   ->setEtat($etat)
                   ->setDisponibilite($disponibilite);

        $this->entityManager->persist($equipement);
        $this->entityManager->flush();
    }

    public function deleteEquipement(int $id): void
    {
        $equipement = $this->entityManager->getRepository(Equipement::class)->find($id);
        if ($equipement) {
            $this->entityManager->remove($equipement);
            $this->entityManager->flush();
        }
    }
}
