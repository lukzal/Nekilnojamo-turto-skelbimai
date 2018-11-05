<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContractController extends AbstractController
{
    /**
     * @Route("/contracts", name="contracts")
     */
    public function index()
    {
        return $this->render('contract/index.html.twig', [
            'controller_name' => 'ContractController',
        ]);
    }


    /**
     * @Route("/contracts/sign", name="sign_contracts")
     */
    public function sign()
    {
        return $this->render('contract/sign.html.twig', [
            'controller_name' => 'ContractController',
        ]);
    }

     /**
     * @Route("/contracts/edit", name="edit_contracts")
     */
    public function edit()
    {
        return $this->render('contract/edit.html.twig', [
            'controller_name' => 'ContractController',
        ]);
    }
}
