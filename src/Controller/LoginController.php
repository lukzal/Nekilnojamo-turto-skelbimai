<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/log", name="log")
     */
    public function log(Request $request)
    {
        $form = $this->createFormBuilder(null)
        ->add('email', EmailType::class)
        ->add('password', PasswordType::class)
        ->getForm();

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return $this->redirectToRoute('home');
    }
}
