<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Naudotojai;
use App\Entity\Sutartis;
use App\Entity\Klientas;
use App\Entity\NekilnojamasTurtas;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\ContractController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;


class ContractController extends AbstractController
{
    /**
     * @Route("/contracts", name="contracts")
     */
    public function index()
    {
        $session = new Session();
        $email = $session->get("userEmail");
        $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
        $id = $user -> getId(); 
        $nekilnojamasturtas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findBy(['naudotojas' => $id]); 
        $sutartys = $this->getDoctrine()->getRepository(Sutartis::class)->findAll(); 
        $klientosutartys = $this->getDoctrine()->getRepository(Sutartis::class)->findBy(['klientas' => $id]); 
        $saugojamosSutartys = [];
        foreach($sutartys as $sut) {
            foreach($nekilnojamasturtas as $nek)
            if ($sut->getBustas()->getId() == $nek->getId()){
                $saugojamosSutartys[] = $sut;
            }
                
        }
        $errors = [];
        $sutartisData["errors"] = $errors;
        $sutartisData['sutartys'] = $saugojamosSutartys;
        $sutartisData['sutartys1'] = $klientosutartys;
       return $this->render('contract/index.html.twig', $sutartisData);
    }

    /**
     * @Route("/contracts/dalete", name="delete_sutartis")
     */
    public function dalete(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('sutartis_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $sutartis = $this->getDoctrine()
            ->getRepository(Sutartis::class)
            ->findOneBy(["id" => $data["sutartis_id"]]);

            $em = $this->getDoctrine()->getManager();
            
            $em->remove($sutartis);
            $em->flush();
        }
        return $this->redirectToRoute("contracts");
    }

     /**
     * @Route("/contracts/siusti", name="siusti_kopija")
     */
    public function siusti(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('sutartis_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $session = new Session();
            $session->set('sutartiesid', $data["sutartis_id"]);

        return $this->render('send_email/index.html.twig');
    }
    }

     /**
     * @Route("/contracts/siusti_proc", name="send_email_proc")
     */
    public function siusti_proc(Request $request, \Swift_Mailer $mailer)
    {
        $session = new Session();
        $sutarties_id = $session->get("sutartiesid");

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
                return $this->render('send_email/index.html.twig', $data);
            }

            $sutartis = $this->getDoctrine()->getRepository(Sutartis::class)->findOneBy(['id' => $sutarties_id]);
            $salygos= 'Sutarties papildomos sąlygos yra: '.$sutartis -> getPapildomosSalygos();
            $message = (new \Swift_Message('Sutarties numeriu '.$sutarties_id.' kopija'))
            ->setFrom('nek.turtas.site@gmail.com')
            ->setTo($data["email"])
            ->setBody(
                 $salygos,
                'text/plain'
            );
            $result = $mailer->send($message);
        }

            return $this->redirectToRoute("contracts");
    }


     /**
     * @Route("/contracts/sign", name="sign_contracts")
     */
    public function sign(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('nekilnojamas_turtas_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $session = new Session();
           // $session->set('nekID', $data["nekilnojamas_turtas_id"]);
           $session->set('nekID', '24');
        }
        return $this->render('contract/sign.html.twig');
       // return new Response($time);
    }
    /**
     * @Route("/contracts/sign_porc", name="sign_contracts_proc")
     */
    public function sign_proc(Request $request)
    {
        $session = new Session();
        $email = $session->get("userEmail");
        $nekid = $session->get("nekID");
        $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
        $namas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findOneBy(['id' => $nekid]);
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder()
        ->add('papildomossalygos')
        ->getForm();

        $form->handleRequest($request);
        $time = date('Y-m-d H:i:s');
        if($nekid){
         if($form->isSubmitted()){
                $data = $form->getData();

                $sutartis = new Sutartis();
                $sutartis->setBustas($namas);
                $sutartis->setKlientas($user);
                $sutartis->setData(new \DateTime());
                $sutartis->setPapildomosSalygos($data['papildomossalygos']);
                $sutartis->getKainaPerMenesi(null);
                $sutartis->setKaina(null);

                $entityManager->persist($sutartis);
                $entityManager->flush();
         }
    }
    return $this->redirectToRoute("contracts");
   //return new Response($nekid);
}

     /**
     * @Route("/contracts/edit", name="edit_contracts")
     */
    public function edit(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('sutartis_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $session = new Session();
            $session->set('sutartiesid', $data["sutartis_id"]);
        }
        return $this->render('contract/edit.html.twig');
    }
 /**
     * @Route("/contracts/edit_contracts_proc", name="edit_contracts_proc")
     */
    public function edit_proc(Request $request)
    {
        $session = new Session();
        $sutarties_id = $session->get("sutartiesid");
        
            $form = $this->createFormBuilder()
            ->add('papildomossalygos')
            ->getForm();

            $form->handleRequest($request);

            if($sutarties_id){
             if($form->isSubmitted()){
                    $data = $form->getData();

                    $sutartis = $this->getDoctrine()
                    ->getRepository(Sutartis::class)
                    ->findOneBy(["id" => $sutarties_id]);

            $em = $this->getDoctrine()->getManager();
            if($sutartis != null){
            $sutartis->setPapildomosSalygos($data['papildomossalygos']);
            $em->persist($sutartis);
            $em->flush();
            return $this->redirectToRoute("contracts");
            }
        }
    }
}
}

     


