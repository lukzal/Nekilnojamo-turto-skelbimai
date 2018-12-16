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
        $id = $user -> getId(); //naudotojo id
        $nekilnojamasturtas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findBy(['naudotojas' => $id]); //nekilnojamo turto objektui, kurie priklauso naudotojui
        $sutartys = $this->getDoctrine()->getRepository(Sutartis::class)->findAll(); //paima visas sutartis
        $saugojamosSutartys = [];
        foreach($sutartys as $sut) {
            foreach($nekilnojamasturtas as $nek)
            if ($sut->getBustas()->getId() == $nek->getId()){
                $saugojamosSutartys[] = $sut;
            }
                
        }
        $sutartisData['sutartys'] = $saugojamosSutartys;
       // var_dump($sutartisData); exit;
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
        return $this->render('contract/index.html.twig');
    }

     /**
     * @Route("/contracts/siusti", name="siusti_kopija")
     */
    public function siusti()
    {
        return $this->render('contract/index.html.twig', [
            'controller_name' => 'ContractController',
        ]);
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

     


