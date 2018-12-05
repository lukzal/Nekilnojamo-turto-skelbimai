<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Naudotojai;
use Symfony\Component\HttpFoundation\Session\Session;
class ProfileController extends AbstractController
{
    
    public $errorOccured = false;
    public $changePass = false;

    /**
     * @Route("/profile", name="profile")
     */
    public function index()
    {
        return $this->render('profile/index.html.twig');
    }

    /**
     * @Route("/profile/edit", name="edit_profile")
     */
    public function edit()
    {
        $session = new Session();
        $session->start();
        $email = $session->get("userEmail");

        if($email){
            $user = new Naudotojai();
            $user = $this->getUserDetails($email);
            $data = [];
            $error = [];
            $data["errors"] = $error;
            $data["data"] = ["email" => $user->getElPastas(), "name" => $user->getVardas(), "surname" => $user->getPavarde(), 
            "old_password" => "", "new_password" => "", "passwordAgain" => "", "phone" => $user->getTelefonoNr(), "code" => $user->getAsmensKodas()];
            return $this->render('profile/edit.html.twig', $data);
        }else{
            $this->redirectToRoute("home");
        }
    }

/**
     * @Route("/profile/edit_proc", name="edit_profile_proc")
     */
    public function editProc(Request $request){
        $session = new Session();
        $session->start();
        $email = $session->get("userEmail");

        $form = $this->createFormBuilder()
        ->add('email')
        ->add('name')
        ->add('surname')
        ->add('old_password')
        ->add('new_password')
        ->add('passwordAgain')
        ->add('code')
        ->add('phone')
        ->getForm();

        $form->handleRequest($request);

        if($email){
            if($form->isSubmitted()){
                $data = $form->getData();
                $data2 = [];
                $data2["data"] = $data;
                $data2["errors"] = $this->checkFields($data);
                if($this->errorOccured == true){
                    return $this->render('profile/edit.html.twig', $data2);
                }else{
                    $user = $this->getDoctrine()
                    ->getRepository(Naudotojai::class)
                    ->findOneBy(["el_pastas" => $email]);

                    $em = $this->getDoctrine()->getManager();
                    
                    if($this->changePass == true){
                        $pass = password_hash($data['new_password'], PASSWORD_DEFAULT);
                        $user->setVardas($data['name'])
                        ->setPavarde($data['surname'])
                        ->setElPastas($data['email'])
                        ->setAsmensKodas($data['code'])
                        ->setTelefonoNr($data['phone'])
                        ->setSlaptazodis($pass);
                    }else{
                        $user->setVardas($data['name'])
                        ->setPavarde($data['surname'])
                        ->setElPastas($data['email'])
                        ->setAsmensKodas($data['code'])
                        ->setTelefonoNr($data['phone']);
                    }
                    $em->persist($user);
                    $em->flush();
                    $session->set('userEmail', $data["email"]);
                }
        }else{
            $user = new Naudotojai();
            $user = $this->getUserDetails($email);
            $data = [];
            $error = [];
            $data["errors"] = $error;
            $data["data"] = ["email" => $user->getElPastas(), "name" => $user->getVardas(), "surname" => $user->getPavarde(), 
            "old_password" => "", "new_password" => "", "passwordAgain" => "", "phone" => $user->getTelefonoNr(), "code" => $user->getAsmensKodas()];
            return $this->render('profile/edit.html.twig', $data);
        }
    }else{
        return $this->redirectToRoute("home");
    }
        return $this->redirectToRoute('edit_profile');
    }

    private function getUserDetails($email){
        $user = new Naudotojai();

        $user = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        return $user;
    }

    private function checkFields($data){
        $errors = null;

        if(empty($data["name"]) || empty($data["surname"]) || empty($data["email"]) ||
        empty($data["code"]) || empty($data["phone"])){
            $errors[] = ["text" => "Visi laukeliai turi buti uzpildyti!"];
            $this->errorOccured = true;
            return $errors;
        }elseif(!empty($data["old_password"]) || !empty($data["new_password"]) || !empty($data["passwordAgain"]) ){
            if(empty($data["old_password"]) || empty($data["new_password"]) || empty($data["passwordAgain"])){
                $errors[] = ["text" => "Visi slaptazodzio laukeliai turi buti uzpildyti!"];
                $this->errorOccured = true;
                return $errors;
            }else{
            $this->changePass = true;
            if($data["new_password"] != $data["passwordAgain"]){
                $this->changePass = false;
            $errors[] = ["text" => "Slaptazodziai turi sutapti!"];
            $this->errorOccured = true;
            return $errors;
        }elseif(!$this->isPasswordCorrect($data["email"], $data["old_password"])){
            $this->changePass = false;
            $errors[] = ["text" => "Neteisingas senas slaptazodis!"];
            $this->errorOccured = true;
            return $errors;
        }
    }
    }
    }

    private function isPasswordCorrect($email, $entPass){
        $userByEmail = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $pass = $userByEmail->getSlaptazodis();

        return password_verify($entPass, $pass);
    }
}
