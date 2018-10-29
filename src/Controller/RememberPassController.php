<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RememberPassController extends AbstractController
{
    /**
     * @Route("/remember_pass", name="remember_pass")
     */
    public function index()
    {
        return $this->render('remember_pass/index.html.twig', [
            'controller_name' => 'RememberPassController',
        ]);
    }
}
