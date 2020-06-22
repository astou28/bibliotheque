<?php

namespace App\Controller;
use App\Entity\Livre;
use App\Form\MonFormulaireType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\{TextType, ButtonType, EmailType, HiddenType, PasswordType, TextareaType, SubmitType, NumberType, DateType, MoneyType, BirthdayType};
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class AfficheController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function index(): Response
    {

        $livres= $this->getDoctrine()->getRepository(Livre::class)->findAll();
        return $this->render('affiche/index.html.twig', ['livres' => $livres]);

        
    }
    /**
     * @Route("/affiche/nouveau", name="livre_new", methods={"GET","POST"})
     */
    public function nouveau(Request $request): Response
    {
        $livre = new Livre();
        $form = $this->createForm(MonFormulaireType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($livre);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('affiche/nouveau.html.twig', [
            'livre' => $livre,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/affiche/{idLivre}",name ="affichage")
     */
    public function affichage($idLivre)
    {
        $livre = $this->getDoctrine()->getRepository(Livre::class)->find($idLivre);
        return $this->render('affiche/affichage.html.twig', ['livre' => $livre]);
    }

   }


