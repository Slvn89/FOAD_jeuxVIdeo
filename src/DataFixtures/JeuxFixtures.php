<?php
// src/DataFixtures/JeuxFixtures.php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Jeux;
use Faker\Factory;

class JeuxFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        // Créez 10 jeux vidéo factices
        for ($i = 0; $i < 10; $i++) {
            $jeu = new Jeux();
            $jeu->setNomJeu($faker->name);
            $jeu->setGenre($faker->word);
            $jeu->setDateSortie($faker->dateTimeThisDecade);
            $jeu->setNoteMoyenne($faker->randomFloat(2, 1, 10));
      
            $manager->persist($jeu);
        }

        $manager->flush();
    }
}
