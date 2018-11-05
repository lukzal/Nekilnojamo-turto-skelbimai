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

    /**
     * @Route("/new_add", name="new_add")
     */
    public function new()
    {

        return $this->render('add/new.html.twig');
    }

    /**
     * @Route("/edit_add", name="edit_add")
     */
    public function edit()
    {

        return $this->render('add/edit.html.twig');
    }

    /**
     * @Route("/user_ads", name="user_ads")
     */
    public function userAdds()
    {

        return $this->render('add/userAds.html.twig');
    }
}

