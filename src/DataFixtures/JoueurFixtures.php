<?php 
// src/DataFixtures/JoueurFixtures.php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Joueurs;
use Faker\Factory;

class JoueurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $joueur = new Joueurs();
            $joueur->setNomJoueur($faker->name);
            $joueur->setPseudonyme($faker->userName);
            $joueur->setDateNaissance($faker->dateTimeThisCentury);
            $joueur->setEmail($faker->email);

            $manager->persist($joueur);
        }

        $manager->flush();
    }
}
