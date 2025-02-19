<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class CategoryFixtures extends Fixture 
{
    public function load(ObjectManager $manager): void
    {
        // Création des catégories
        for ($i = 1; $i <= 5; $i++) {
            $category = new Category();
            $category->setName('Gestion de projet ' . $i);
            $category->setDescription('Description de la Categorie ' . $i);
            $category->setCreatedAt(new \DateTimeImmutable('now'));
            $category->setUpdatedAt(new \DateTimeImmutable('now'));

            $manager->persist($category);

            // Ajouter une référence pour chaque catégorie
            $this->addReference('category_' . $i, $category);
        }

        // Enregistrer les catégories en base de données
        $manager->flush();
    }

    
}