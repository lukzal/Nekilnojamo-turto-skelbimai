<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Naudotojai;
use App\Entity\Klientas;
use App\Entity\NekilnojamasTurtas;
use App\Entity\Skelbimas;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\AddController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;


class AddController extends AbstractController
{
    /**
     * @Route("/add/{id}", name="add")
     */
    public function index()
    {

        $arr = array('id' => 1,
                    'description' => 'Skelbimo aprasymas',
                    'kaina' => 2000);

        return $this->render('add/index.html.twig', $arr);


    }

    /**
     * @Route("/add/add", name="new_add")
     */
    // public function new()
    // {

    //     return $this->render('add/new.html.twig');
    // }

    public function new(Request $request)
    {
        $session = new Session();
    $email = $session->get("userEmail");
    $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
    $id=$user->getId();
    $form = $this->createFormBuilder()
        ->add('pavadinimas')
        ->add('kaina')
        ->add('aprasymas')
        ->getForm();

        $namas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findOneBy(['id' => '25']);
        $entityManager = $this->getDoctrine()->getManager();


        $form->handleRequest($request);
        $time = date('Y-m-d H:i:s');
        if($id){
         if($form->isSubmitted()){
                $data = $form->getData();

                $skelbimas = new Skelbimas();
                $skelbimas->setPardavejas($user);
                $skelbimas->setNekilnojamasTurtas($namas);
                $skelbimas->setPavadinimas($data['pavadinimas']);
                $skelbimas->setSkelbimas($data['aprasymas']);
                $skelbimas->setSukurimoData(new \DateTime());
                $skelbimas->setGaliojimoData("2018-12-18 00:00:00");
                $skelbimas->setKaina($data['kaina']);

                $entityManager->persist($skelbimas);
                $entityManager->flush();
         }             
}
return $this->redirectToRoute("home");

    }

    // /**
    //  * @Route("/edit_add", name="edit_add")
    //  */
    // public function edit()
    // {

    //     return $this->render('add/edit.html.twig');
    // }


     /**
     * @Route("/userAds/edit", name="edit_add")
     */
    public function edit(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('skelbimas_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $session = new Session();
            $session->set('skelbimoid', $data["skelbimas_id"]);
        }
        return $this->render('add/edit.html.twig');
    }
 /**
     * @Route("/userAds/edit_ads_proc", name="edit_ads_proc")
     */
    public function edit_proc(Request $request)
    {
        $session = new Session();
        $skelbimo_id = $session->get("skelbimoid");
        
            $form = $this->createFormBuilder()
            ->add('pavadinimas')
            ->add('kaina')
            ->add('aprasymas')
            ->getForm();

            $form->handleRequest($request);

            if($skelbimo_id){
             if($form->isSubmitted()){
                    $data = $form->getData();

                    $skelbimas = $this->getDoctrine()
                    ->getRepository(Skelbimas::class)
                    ->findOneBy(["id" => $sutarties_id]);

            $em = $this->getDoctrine()->getManager();
            if($skelbimas != null){
            $skelbimas->setId($data['skelbimoid'])
            ->setPavadinimas($data['pavadinimas'])
            ->setKaina($data['kaina'])
            ->setSkelbimas($data['aprasymas']);
            $em->persist($skelbimas);
            $em->flush();
            return $this->redirectToRoute("contracts");
            }
            }
        }
    }






    /**
     * @Route("/userAds/delete", name="delete_skelbimas")
     */
    public function delete(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('skelbimas_id')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            $skelbimas = $this->getDoctrine()
            ->getRepository(Skelbimas::class)
            ->findOneBy(["id" => $data["skelbimas_id"]]);

            $em = $this->getDoctrine()->getManager();
            
            $em->remove($skelbimas);
            $em->flush();
        }
        return $this->redirectToRoute("user_ads");
    }

    /**
     * @Route("/user_ads", name="user_ads")
     */
    public function userAdds()
    {
        $session = new Session();
        $email = $session->get("userEmail");
        $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
        $id = $user -> getId(); 
        $nekilnojamasturtas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findBy(['naudotojas' => $id]); 
        // $skelbimai = $this->getDoctrine()->getRepository(Skelbimas::class)->findAll(); 
        $skelbimai = $this->getDoctrine()->getRepository(Skelbimas::class)->findBy(['pardavejas' => $id]); 
        $saugojamiSkelbimai = [];
        foreach($skelbimai as $skelb) {
            foreach($nekilnojamasturtas as $nek)
            if ($skelb->getNekilnojamasTurtas()->getId() == $nek->getId()){
                $saugojamiSkelbimai[] = $skelb;
            }
                
        }
        $errors = [];
        $skelbimasData["errors"] = $errors;
        $skelbimasData['skelbimai'] = $saugojamiSkelbimai;
        // $skelbimasData['skelbimai1'] = $klientoskelbimai;
       return $this->render('add/userAds.html.twig', $skelbimasData);
        // return $this->render('add/userAds.html.twig');
    }
}

