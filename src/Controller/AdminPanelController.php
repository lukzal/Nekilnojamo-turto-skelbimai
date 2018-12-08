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
        $toarray = $this->getbanStatus($toarray);

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
            $data = $form->getData();

            if(!($this->userExists($data["user_id"]))){
                $data = [];
                $data["users"] = [];
                $errors = [["text" => "Vartotojas neegzistuoja"]];
                $data["errors"] = $errors;
                return $this->render('admin_panel/users.html.twig', $data);
            }


            $user = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findOneBy(["id" => $data["user_id"]]);

            $ban = $this->getDoctrine()
            ->getRepository(Blokavimai::class)
            ->findOneBy(["naudotojo_id" => $data["user_id"]]);

            $em = $this->getDoctrine()->getManager();

            if($ban != null){
                $user->removeUzblokuota($ban);
                $em->remove($ban);
            }
            
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute("admin_panel_users");
    }

    /**
     * @Route("/admin/ban_user", name="ban_user")
     */
    public function ban(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('user_id')
        ->add('reason')
        ->add('ends')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            if(empty($data["reason"]) || empty($data["ends"])){
                return $this->redirectToRoute("admin_panel_users");
            }

            $user = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findOneBy(["id" => $data["user_id"]]);
            
            $ban = new Blokavimai();
            $date = new \DateTime($data["ends"]);
            $dateNow = new \DateTime();

            $ban->setNaudotojoId($user)
            ->setBaigiasi($date)
            ->setPriezastis($data["reason"])
            ->setData($dateNow);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ban);
            $em->flush();
        }

        return $this->redirectToRoute("admin_panel_users");
    }

    /**
     * @Route("/admin/unban_user", name="unban_user")
     */
    public function unban(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('user_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();
            
            $ban = $this->getDoctrine()
            ->getRepository(Blokavimai::class)
            ->findOneBy(["naudotojo_id" => $data["user_id"]]);

            $em = $this->getDoctrine()->getManager();

            $user = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findOneBy(["id" => $data["user_id"]]);

            if($ban != null){
                $user->removeUzblokuota($ban);
                $em->remove($ban);
                $em->flush();
            }
        }

        return $this->redirectToRoute("admin_panel_users");
    }

    /**
     * @Route("/admin/user_type", name="user_type")
     */
    public function changeType(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('user_id')
        ->add('user_type')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();
            
            $em = $this->getDoctrine()->getManager();

            $user = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findOneBy(["id" => $data["user_id"]]);

            if($user != null){
                $user->setRole($data["user_type"]);
                $em->persist($user);
                $em->flush();
            }
        }

        return $this->redirectToRoute("admin_panel_users");
    }

    private function usersToArray($users, $adminEmail){
        $arr = [];
        $index = 0;
        for ($i=0; $i < count($users); $i++) { 
            if($users[$i]->getElPastas() != $adminEmail){
                $type = "";
                switch ($users[$i]->getRole()) {
                    case 1:
                        $type = "Paprastas";
                        break;
                    case 2:
                        $type = "Moderatorius";
                        break;
                    case 3:
                        $type = "Administratorius";
                        break;
                }

            $arr[$index] = ["id" => $users[$i]->getId(), "username" => $users[$i]->getNaudotojoVardas(),
                "email" => $users[$i]->getElPastas(), "type" => $type,
                "banned" => "Neužblokuotas"];
                $index++;
            }
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

        return $arr;
    }

    private function isUserBanned($id){
        $banned = $this->getDoctrine()
        ->getRepository(Blokavimai::class)
        ->findOneBy(["naudotojo_id" => $id]);

        if(!$banned)
            return false;

        return true;
    }

    private function userExists($id){
        $userByID = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["id" => $id]);

        if(!$userByID){
            return false;
        }

        return true;
    }
}
