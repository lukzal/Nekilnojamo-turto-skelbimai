<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment/new", name="comment")
     */
    public function index()
    {
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }

    /**
     * @Route("/comment/edit", name="edit_com")
     */
    public function edit()
    {
        return $this->render('comment/edit.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }
}
