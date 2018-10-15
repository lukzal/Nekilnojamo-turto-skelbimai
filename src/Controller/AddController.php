<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add/{id}", name="add")
     */
    public function index()
    {
        $arr = array('id' => 1,
                    'description' => 'Skelbimo aprasymas',
                    'kaina' => 2000);

        return $this->render('add/index.html.twig', $arr);
    }
}

