<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Personne;
use App\Entity\Livre;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheController extends AbstractController
{

    public function index(): Response
    {
        $livres=['Une si long lettre','Une vie de boy','Batouala','L\'enfant noir'];
        return $this->render('affiche/index.html.twig', ['livres' => $livres]);

        
    }
    /**
     * @Route("/affiche/ajouter,name ="ajouter")
     */
    public function ajouter()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $livre = new Livre();
        $personne = new Personne();
        $genre = new Genre();

        $livre -> setTitre('l\'Etranger');
        $livre->setAnn�e(1942);
        $livre->setNbrPage(127);
        $livre->setIdGenre(null);
        $livre->setIdAuteur(null);
        $personne->setPrenomNom('Albert Camus');
        $genre->setNomGenre('Roman');

        $entityManager->persist($livre,$personne,$genre);
        $entityManager->flush();

        return new Response('enregitrement des livre sur la bd'.$livre->getIdLivre());




    }
}


