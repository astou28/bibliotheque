<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\AjoutGenreType;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GenreController extends AbstractController
{
    /**
     * @Route("/genre", name="genre")
     */
    public function new_genre(Request $request): Response
    {
        $genre = new Genre();
        $form = $this->createForm(AjoutGenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($genre);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('genre/new_genre.html.twig', [
            'genre' => $genre,
            'form' => $form->createView(),
        ]);
    }
}
