<?php

namespace app\controllers;

use app\Entities\Animal;

class AnimalController
{
    private $animalModel;



    public function getAllAnimals(): array
    {
        return $this->animalModel->getAllAnimals();
    }

    public function createAnimal(string $type, int $age, string $sante, int $equipementId): void
    {
        $animal = new Animal();
        $animal->setType($type)
               ->setAge($age)
               ->setSante($sante)
               ->setEquipementId($equipementId);

        $this->animalModel->saveAnimal($animal);
    }

    public function updateAnimal(int $id, string $type, int $age, string $sante, int $equipementId): void
    {
        $animal = $this->animalModel->findAnimalById($id);
        if ($animal) {
            $animal->setType($type)
                   ->setAge($age)
                   ->setSante($sante)
                   ->setEquipementId($equipementId);

            $this->animalModel->saveAnimal($animal);
        }
    }

    public function deleteAnimal(int $id): void
    {
        $animal = $this->animalModel->findAnimalById($id);
        if ($animal) {
            $this->animalModel->deleteAnimal($animal);
        }
    }

    public function findAnimalById(int $id): ?Animal
    {
        return $this->animalModel->findAnimalById($id);
    }
}
