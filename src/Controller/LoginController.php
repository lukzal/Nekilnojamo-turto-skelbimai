<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Naudotojai;
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
}
