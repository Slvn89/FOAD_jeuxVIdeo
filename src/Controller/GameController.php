<?php

// src/Controller/GameController.php

// src/Controller/GameController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Jeux;

class GameController extends AbstractController
{
    // ...

    /**
     * @Route("/games", name="game_list")
     */
    public function listGames(EntityManagerInterface $entityManager)
    {
        // Récupérez les jeux depuis la base de données
        $jeuxRepository = $entityManager->getRepository(Jeux::class);
        $games = $jeuxRepository->findAll();

        return $this->render('game/list.html.twig', [
            'games' => $games,
        ]);
    }
}

