<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Naudotojai;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends AbstractController
{
    public $errorOccured = false;

    /**
     * @Route("/registration", name="registration")
     */
    public function index()
    {
        $data = [];
        $error = [];
        $data["errors"] = $error;

        $data["data"] = ["username" => "", "email" => "", "name" => "", 
        "surname" => "", "password" => "", "phone" => "", "code" => ""];

        return $this->render('registration/index.html.twig', $data);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('username')
        ->add('email')
        ->add('name')
        ->add('surname')
        ->add('password')
        ->add('password_again')
        ->add('code')
        ->add('phone')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $user = new Naudotojai();
            $data = $form->getData();
            $data2 = [];
            $data2["data"] = $data;
            $data2["errors"] = $this->checkFields($data);
            if($this->errorOccured == true){
                return $this->render('registration/index.html.twig', $data2);
            }else{
            if($this->userExists($data["email"], $data["username"])){
                $error = [["text" => "Toks naudotojas jau egzistuoja!"]];
                $data2["errors"] = $error;
                return $this->render('registration/index.html.twig', $data2);
            }else{
                $em = $this->getDoctrine()->getManager();
                $pass = password_hash($data['password'], PASSWORD_DEFAULT);
                $user->setNaudotojoVardas($data['username'])
                ->setVardas($data['name'])
                ->setPavarde($data['surname'])
                ->setElPastas($data['email'])
                ->setAsmensKodas((int)$data['code'])
                ->setTelefonoNr($data['phone'])
                ->setRole(1)
                ->setSlaptazodis($pass);
                $em->persist($user);
                $em->flush();
                $data["errors"] = [["text" => "Uzsiregistruota sekmingai. Galite prisijungti."]];
                return $this->render('registration/index.html.twig', $data);
                
            }
            }
        }
        return $this->redirectToRoute("register");
    }

    private function userExists($email, $username){
        $userByEmail = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["el_pastas" => $email]);

        $userByUsername = $this->getDoctrine()
        ->getRepository(Naudotojai::class)
        ->findOneBy(["naudotojo_vardas" => $username]);

        if(!$userByEmail && !$userByUsername){
            return false;
        }

        return true;
    }

    private function checkFields($data){
        $errors = null;

        if(empty($data["username"]) || empty($data["name"]) || empty($data["surname"]) || empty($data["email"]) ||
        empty($data["code"]) || empty($data["password"]) || empty($data["password_again"])){
            $errors[] = ["text" => "Visi laukeliai turi buti uzpildyti!"];
            $this->errorOccured = true;
            return $errors;
        }elseif($data["password"] != $data["password_again"]){
            $errors[] = ["text" => "Slaptazodziai turi sutapti!"];
            $this->errorOccured = true;
            return $errors;
        }
    }
}
