<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SwiftmailerBundle;
use App\Entity\Naudotojai;

class RememberPassController extends AbstractController
{
    /**
     * @Route("/remember_pass", name="remember_pass")
     */
    public function index()
    {
        $session = new Session();
        $session->start();
        $email = $session->get("userEmail");
        if($email){
            $this->redirectToRoute("home");
        }else{
            $data = [];
            $error = [];
            $data["errors"] = $error;
            return $this->render('remember_pass/index.html.twig', $data);
        }
    }

    /**
     * @Route("/remember_pass_proc", name="remember_pass_proc")
     */
    public function proc(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createFormBuilder()
        ->add('email')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();
            if(empty($data["email"])){
                $data = [];
                $error = [["text" => "Laukelis turi būti užpildytas!"]];
                $data["errors"] = $error;
                return $this->render('remember_pass/index.html.twig', $data);
            }elseif(!($this->userExists($data["email"]))){
                $data = [];
                $error = [["text" => "Vartotojas tokiu el. paštu neegzistuoja!"]];
                $data["errors"] = $error;
                return $this->render('remember_pass/index.html.twig', $data);
            }

            $newPass = $this->generateRandomString(10);
            
            $user = $this->getDoctrine()
            ->getRepository(Naudotojai::class)
            ->findOneBy(["el_pastas" => $data["email"]]);

            $hashed = password_hash($newPass, PASSWORD_DEFAULT);

            $user->setSlaptazodis($hashed);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $subject = "Naujas Slaptazodis";
            $mail = "Jusu naujas slaptazodis: " . $newPass;
            $message = (new \Swift_Message('Naujas Slaptazodis'))
            ->setFrom('nek.turtas.site@gmail.com')
            ->setTo($data["email"])
            ->setBody(
                $mail,
                'text/plain'
            );
            $result = $mailer->send($message);

            
            $data = [];
            $error = [["text" => "Naujas slaptazodis issiustas"]];
            $data["errors"] = $error;
            return $this->render('remember_pass/index.html.twig', $data);
        }
    }

    private function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
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
