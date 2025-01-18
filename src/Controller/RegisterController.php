<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $entitymanager): Response
    {
        $user = new User();
        $form =$this->createForm(RegisterUserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $entitymanager->persist($user);
        $entitymanager->flush();
        }
        $this->addFlash('success', 'Votre compte a bien été créé !');

        return $this->render('register/index.html.twig', [

            'registerForm' => $form->createView(),
        ]);
    }
}
