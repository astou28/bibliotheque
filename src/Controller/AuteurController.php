<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\AjoutAuteurType;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AuteurController extends AbstractController
{
    /**
     * @Route("/auteur", name="auteur")
     */
    public function new_auteur(Request $request): Response
    {
        $auteur = new Personne();
        $form = $this->createForm(AjoutAuteurType::class, $auteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteur);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('auteur/new_auteur.html.twig', [
            'auteur' => $auteur,
            'form' => $form->createView(),
        ]);
    }
}
