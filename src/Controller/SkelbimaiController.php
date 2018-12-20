<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Naudotojai;
use App\Entity\Klientas;
use App\Entity\Skelbimas;
use App\Entity\NekilnojamasTurtas;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\ContractController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;


class SkelbimaiController extends AbstractController
{
    /**
     * @Route("/skelbimai", name="skelbimai")
     */
    public function index()
    {
        $session = new Session();
        $email = $session->get("userEmail");
        $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
        $id = $user -> getId(); 
        $nekilnojamasturtas = $this->getDoctrine()->getRepository(NekilnojamasTurtas::class)->findBy(['naudotojas' => $id]); 
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
        return $this->render('skelbimai/index.html.twig', $skelbimasData);
    }

    /**
     * @Route("/newskelbimas", name="newskelbimas")
     */
    public function new()
    {
    return $this->render('skelbimai/newskelbimas.html.twig');
}

    /**
     * @Route("/newskelbimasproc", name="newskelbimasproc")
     */
    public function newproc(Request $request)
    {
        $session = new Session();
        $email = $session->get("userEmail");
        $user = $this->getDoctrine()->getRepository(Naudotojai::class)->findOneBy(['el_pastas' => $email]);
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder()
        ->add('pavadinimas')
        ->add('skelbimas')
        ->add('kaina')
        ->add('namonumeris')
        ->add('plotas')
        ->add('metai')
        ->add('gatvesnumeris')
        ->add('miestas')
        ->getForm();

        $form->handleRequest($request);
         if($form->isSubmitted()){
                $data = $form->getData();

                $nekilnojamasturtas = new NekilnojamasTurtas();
                $nekilnojamasturtas->setNamoNumeris($data['namonumeris']);
                $nekilnojamasturtas->setNaudotojas($user);
                $nekilnojamasturtas->setButoNumeris(null);
                $nekilnojamasturtas->setSklypoPlotas(null);
                $nekilnojamasturtas->setKambariuSkaicius(null);
                $nekilnojamasturtas->setPastatoTipas(null);
                $nekilnojamasturtas->setPlotas($data['plotas']);
                $nekilnojamasturtas->setSildymas(null);
                $nekilnojamasturtas->setApsauga(null);
                $nekilnojamasturtas->setMetai(new \DateTime());
                $nekilnojamasturtas->setGatvesNumeris($data['gatvesnumeris']);
                $nekilnojamasturtas->setMiestas($data['miestas']);
                $nekilnojamasturtas->setAukstai(null);

                $entityManager->persist($nekilnojamasturtas);
                $entityManager->flush();

                $skelbimas = new Skelbimas();
                $skelbimas->setPardavejas($user);
                $skelbimas->setNekilnojamasTurtas($nekilnojamasturtas);
                $skelbimas->setPavadinimas($data['pavadinimas']);
                $skelbimas->setSkelbimas($data['skelbimas']);
                $skelbimas->setSukurimoData(new \DateTime());
                $skelbimas->setGaliojimoData(new \DateTime());
                $skelbimas->setKaina($data['kaina']);

                $entityManager->persist($skelbimas);
                $entityManager->flush();
    }
    return $this->redirectToRoute("skelbimai");
}

    /**
     * @Route("skelbimai/editskelbimas", name="editskelbimas")
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

            $skelbimas = $this->getDoctrine()->getRepository(Skelbimas::class)->findOneBy(['id' => $data["skelbimas_id"]]);
            $data = [];
            $data["data"] = ["pavadinimas" => $skelbimas->getPavadinimas(), "skelbimas" => $skelbimas->getSkelbimas(),
             "kaina" => $skelbimas->getKaina()];
        }
        return $this->render('skelbimai/editskelbimas.html.twig', $data);
    }

    /**
     * @Route("skelbimai/editskelbimasproc", name="editskelbimasproc")
     */
    public function edit_proc(Request $request)
    {
        $session = new Session();
        $skelbimoid = $session->get("skelbimoid");
        
            $form = $this->createFormBuilder()
            ->add('pavadinimas')
            ->add('skelbimas')
            ->add('kaina')
            ->getForm();

            $form->handleRequest($request);

            if($skelbimoid){
             if($form->isSubmitted()){
                    $data = $form->getData();

                    $skelbimas = $this->getDoctrine()
                    ->getRepository(Skelbimas::class)
                    ->findOneBy(["id" => $skelbimoid]);

            $em = $this->getDoctrine()->getManager();
            if($skelbimas != null){
            $skelbimas->setPavadinimas($data['pavadinimas']);
            $skelbimas->setSkelbimas($data['skelbimas']);
            $skelbimas->setKaina($data['kaina']);

            $em->persist($skelbimas);
            $em->flush();
            }
        }
    }
    return $this->redirectToRoute("skelbimai");
}

    /**
     * @Route("/skelbimai/removeskelbimas", name="removeskelbimas")
     */
    public function remove(Request $request)
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

        return $this->redirectToRoute("skelbimai");
    }

}