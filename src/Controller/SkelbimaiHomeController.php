<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SkelbimaiHomeController extends AbstractController
{
    /**
     * @Route("/skelbimai/home", name="skelbimai_home")
     */
    public function index()
    {
        $arr = array('id' => 1,
        'description' => 'Skelbimo aprasymas',
        'kaina' => 2000);

        return $this->render('skelbimai/index.html.twig', $arr);
    }
}
