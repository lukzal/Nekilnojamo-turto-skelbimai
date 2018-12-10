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
            if ($sut->getNekilnojamasTurtas()->getId() == $nek->getId()){
                $saugojamosSutartys[] = $sut;
            }
                
        }
        $sutartisData['sutartys'] = $saugojamosSutartys;
       // var_dump($sutartisData); exit;
       return $this->render('contract/index.html.twig', $sutartisData);

    }


    /**
     * @Route("/contracts/sign", name="sign_contracts")
     */
    public function sign()
    {
        return $this->render('contract/sign.html.twig', [
            'controller_name' => 'ContractController',
        ]);
    }

     /**
     * @Route("/contracts/edit", name="edit_contracts")
     */
    public function edit(Request $request)
    {
        /*$form = $this->createFormBuilder()
        ->add('sutartis', EntityType::class, [
            'required' => false,
            'class' => Sutartis::class,
            'constraints' => [
                new NotBlank()
            ],
        ])
        ->getForm()->handleRequest($request);*/

        /*if ($form->isSubmitted() && $form->isValid()) {
            $selected = $form->get('sutartis')->getId();
            dump($selected);
            
        }
        else return new Response ('noob');
        return new Response ($selected ->getId());
        $entityManager = $this->getDoctrine()->getManager();*/

        /*if (!$sutartis) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }*/
    
        /*$sutartis[$id]->setPapildomosSalygos('Senas');
        $entityManager->flush();*/
    
        //return new Response( $sutartis[0]->getPapildomosSalygos());
        return $this->render('contract/edit.html.twig', [
            'controller_name' => 'ContractController']);
    }
}
