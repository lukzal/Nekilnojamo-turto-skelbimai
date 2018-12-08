<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Naudotojai;
use App\Entity\Blokavimai;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        $session = new Session();
        $session->start();
        $email = $session->get("userEmail");
        if($email)
            return $this->redirectToRoute("home");

        $data = [];
        $data["errors"] = [];
        return $this->render('login/index.html.twig', $data);
    }

    /**
     * @Route("/log", name="log")
     */
    public function logUserIn(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('email')
        ->add('password')
        ->getForm();

        $data = [];
        $data["errors"] = [];

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();
            if($this->userExists($data["email"]) && $this->isPasswordCorrect($data["email"], $data["password"])){
                if($this->isUserBanned($data["email"])){
                    if(!($this->didBanEnd($data["email"]))){
                        $data["errors"] = [["text" => "Vartotojas užblokuotas."]];
                        return $this->render('login/index.html.twig', $data);
                    }
                }
                $session = new Session();
                $session->start();
                $session->set('userEmail', $data["email"]);
                $type = $this->userType($data["email"]);
                $session->set('userType', $type);
            }else{
                $data["errors"] = [["text" => "Duomenys neteisingi."]];
                return $this->render('login/index.html.twig', $data);
            }
        }else{
            return $this->redirectToRoute('login');
        }
        return $this->redirectToRoute("home");
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        $session = new Session();
        $session->start();
        $session->invalidate();
        return $this->redirectToRoute('home');
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

    private function isPasswordCorrect($email, $entPass){
        $userByEmail = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $pass = $userByEmail->getSlaptazodis();

        return password_verify($entPass, $pass);
    }

    private function userType($email){
        $userType = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $type = $userType->getRole();

        return $type;
    }

    private function isUserBanned($email){
        $user = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $id = $user->getId();
        
        $banned = $this->getDoctrine()
        ->getRepository(Blokavimai::class)
        ->findOneBy(["naudotojo_id" => $id]);

        if(!$banned)
            return false;

        return true;
    }

    private function didBanEnd($email){
        $user = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $id = $user->getId();
        
        $banned = $this->getDoctrine()
        ->getRepository(Blokavimai::class)
        ->findOneBy(["naudotojo_id" => $id]);

        $ended = $banned->getBaigiasi();
        $now = new \DateTime();

        if($now > $ended){
            $this->removeBan($banned, $user);

            return true;
        }

        return false;
    }

    private function removeBan($ban, $user){
        $em = $this->getDoctrine()->getManager();
        $user->removeUzblokuota($ban);
                $em->remove($ban);
                $em->flush();
    }
}
