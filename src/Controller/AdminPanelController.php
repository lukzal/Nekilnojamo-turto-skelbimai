<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Naudotojai;
use App\Entity\Blokavimai;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_panel")
     */
    public function index()
    {
        $session = new Session();
        $session->start();
        $type = $session->get("userType");
        if($type != "3")
            return $this->redirectToRoute("home");

        $data = [];
        $errors = [];
        $data["users"] = [];
        $data["errors"] = $errors;
        return $this->render('admin_panel/panel.html.twig', $data);
    }

    /**
     * @Route("/admin/users", name="admin_panel_users")
     */
    public function users()
    {
        $session = new Session();
        $session->start();
        $type = $session->get("userType");
        $email = $session->get("userEmail");
        if($type != "3")
            return $this->redirectToRoute("home");

        $users = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findAll();

        $toarray = $this->usersToArray($users, $email);
        $this->getbanStatus($toarray);

        $data = [];
        $data["users"] = $toarray;
        $errors = [];
        $data["errors"] = $errors;
        return $this->render('admin_panel/users.html.twig', $data);
    }

    /**
     * @Route("/admin/delete_user", name="delete_user")
     */
    public function delete(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('user_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $users = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findAll();
        }
        return $this->render('admin_panel/users.html.twig');
    }

    /**
     * @Route("/admin/ban_user", name="ban_user")
     */
    public function ban()
    {
        return $this->render('admin_panel/users.html.twig');
    }

    /**
     * @Route("/admin/user_type", name="user_type")
     */
    public function changeType()
    {
        return $this->render('admin_panel/users.html.twig', [
            'controller_name' => 'AdminPanelController',
        ]);
    }

    private function usersToArray($users, $adminEmail){
        $arr = [];

        for ($i=0; $i < count($users); $i++) { 
            if($users[$i]->getElPastas() != $adminEmail)
            $arr[$i] = ["id" => $users[$i]->getId(), "username" => $users[$i]->getNaudotojoVardas(),
                "email" => $users[$i]->getElPastas(), "type" => $users[$i]->getRole(),
                "banned" => "Neužblokuotas"];
        }

        return $arr;
    }

    private function getbanStatus($arr){
        for ($i=0; $i < count($arr); $i++) { 
            $banned = $this->getDoctrine()
            ->getRepository(Blokavimai::class)
            ->findOneBy(["naudotojo_id" => $arr[$i]["id"]]);

            if($banned != null){
                $arr[$i]["banned"] = "Užblokuotas";
            }

        }
    }

    private function userExists($email){
        $userByEmail = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        if(!$userByEmail){
            return false;
        }

        return true;
    }
}
