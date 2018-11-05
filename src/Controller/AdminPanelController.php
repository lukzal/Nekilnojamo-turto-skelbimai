<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_panel")
     */
    public function index()
    {
        return $this->render('admin_panel/panel.html.twig', [
            'controller_name' => 'AdminPanelController',
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_panel_users")
     */
    public function users()
    {
        return $this->render('admin_panel/users.html.twig', [
            'controller_name' => 'AdminPanelController',
        ]);
    }


}
