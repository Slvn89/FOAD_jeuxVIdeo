<?php

// src/Controller/InscriptionController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Joueurs;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;



class InscriptionController extends AbstractController
{
    public function formulaireInscription(Request $request): Response
    {
        $joueur = new Joueurs();

        $formulaire = $this->createForm(InscriptionType::class, $joueur);
        $formulaire->handleRequest($request);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joueur);
            $entityManager->flush();

            // Redirigez l'utilisateur vers une page de confirmation ou ailleurs.
            return $this->redirectToRoute('inscription_confirmation');
        }

        return $this->render('inscription/formulaire.html.twig', [
            'formulaire' => $formulaire->createView(),
        ]);
    }

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function listeInscrits(): Response
    {
        $joueurs = $this->entityManager->getRepository(Joueurs::class)->findAll();

        return $this->render('inscription/list.html.twig', [
            'joueurs' => $joueurs,
        ]);
    }

}
