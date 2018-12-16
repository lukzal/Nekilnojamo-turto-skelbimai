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
        $saugojamosSutartys = [];
        foreach($sutartys as $sut) {
            foreach($nekilnojamasturtas as $nek)
            if ($sut->getBustas()->getId() == $nek->getId()){
                $saugojamosSutartys[] = $sut;
            }
                
        }
        $sutartisData['sutartys'] = $saugojamosSutartys;
        $a = '30';
       //return $this->render('contract/index.html.twig', $sutartisData);
       return new Response($this->getDoctrine()->getRepository(Sutartis::class)->findAllKazkas($a));
       /////kliento sutartys
    }

    public function findAllKazkas($id): array
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.id > :id')
            ->setParameter('id', $id)
            ->orderBy('p.id', 'ASC')
            ->getQuery();

        return $qb->execute();
    }

    /**
     * @Route("/contracts/dalete", name="delete_sutartis")
     */
    public function dalete(Request $request)
    {
        //šalina ir namus
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

            $sutartis = $this->getDoctrine()->getRepository(Sutartis::class)->findOneBy(['id' => $sutarties_id]);
            $id = 'Sutarties ID:'.$sutartis -> getId();
            $salygos= 'Sutarties papildomos sąlygos:'.$sutartis -> getPapildomosSalygos();
            $mail1 = 'Sutarties ID:'.$sutartis -> getId();
            $mail2 = 'Sutarties ID:'.$sutartis -> getId();
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
    public function sign()
    {
        return $this->render('contract/sign.html.twig');
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

           return $this->render('contract/edit.html.twig');

        }
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

     


