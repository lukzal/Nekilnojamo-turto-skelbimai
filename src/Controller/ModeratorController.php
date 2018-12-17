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

class ModeratorController extends AbstractController
{
    /**
     * @Route("/moderator", name="index")
     */
    public function index(Request $request)
    {
      
        $sutartys = $this->getDoctrine()
        ->getRepository(Sutartis::class)
        ->findAll();
        
        $toarray = $this->sutartysToArray($sutartys);
        $data = [];
        $data["sutartys"] = $toarray;
        return $this->render('moderator/index.html.twig', $data);
    }

     /**
     * @Route("/moderator/rikiuoti", name="rikiuoti")
     */
    public function rikiuoti(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('rikiavimas')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            if($data["rikiavimas"] == "data_maz")
            {
                $sutartys = $this->getDoctrine()
                ->getRepository(Sutartis::class)
                ->findBy([], ['data' => 'ASC']);
            }

            if($data["rikiavimas"] == "data_did")
            {
                $sutartys = $this->getDoctrine()
                ->getRepository(Sutartis::class)
                ->findBy([], ['data' => 'DESC']);
            }

            if($data["rikiavimas"] == "id_maz")
            {
                $sutartys = $this->getDoctrine()
                ->getRepository(Sutartis::class)
                ->findBy([], ['id' => 'ASC']);
            }

            if ($data["rikiavimas"] == "id_did")
            {
                $sutartys = $this->getDoctrine()
                ->getRepository(Sutartis::class)
                ->findBy([], ['id' => 'DESC']);
            }
        }  
        $toarray = $this->sutartysToArray($sutartys);
        $data = [];
        $data["sutartys"] = $toarray;
        return $this->render('moderator/index.html.twig', $data);
        return new Response($data['rikiavimas']);
    }

     /**
     * @Route("/moderator/filtruoti", name="filtruoti")
     */
    public function fitruoti(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('dnuo')
        ->add('diki')
        ->add('inuo')
        ->add('iiki')
        ->getForm();

        $form->handleRequest($request);

        $sutartys = $this->getDoctrine()
        ->getRepository(Sutartis::class)
        ->findAll();

        
        if($form->isSubmitted()){
            $data1 = $form->getData();
            if($data1["iiki"] != null && $data1["inuo"] != null)
            {
                $toarray = $this->sutartysToArrayID($sutartys, $data1["inuo"], $data1["iiki"]);

            }

            if($data1["diki"] != null && $data1["dnuo"] != null)
            {
                $toarray = $this->sutartysToArrayData($sutartys, $data1["dnuo"], $data1["diki"]);

            }

            if($data1["iiki"] != null && $data1["inuo"] == null)
            {
                $toarray = $this->sutartysToArrayID($sutartys, '1', $data1["iiki"]);

            }

            if($data1["inuo"] != null && $data1["iiki"] == null)
            {
                $toarray = $this->sutartysToArrayID($sutartys, $data1["inuo"], '100000000000');

            }

            if($data1["diki"] == null && $data1["dnuo"] != null)
            {
                $toarray = $this->sutartysToArrayData($sutartys, $data1["dnuo"], '3000-12-31');

            }

            if($data1["diki"] != null && $data1["dnuo"] == null)
            {
                $toarray = $this->sutartysToArrayData($sutartys, '1800-01-01', $data1["diki"]);

            }
        }  

        $data = [];
        $data["sutartys"] = $toarray;
        return $this->render('moderator/index.html.twig', $data);

    }

    private function sutartysToArray($sutartis){
        $arr = [];
        $index = 0;
        for ($i=0; $i < count($sutartis); $i++) { 
            $arr[$index] = ["id" => $sutartis[$i]->getId(), "data" => $sutartis[$i]->getData()->format('Y-m-d H:i:s'),
                "papildomossalygos" => $sutartis[$i]->getPapildomosSalygos()];
                $index++;
            }
        return $arr;
    }

    private function sutartysToArrayData($sutartis, $nuo, $iki){
        $arr = [];
        $index = 0;
        for ($i=0; $i < count($sutartis); $i++) { 
            if($sutartis[$i]->getData()->format('Y-m-d') <= $iki && $sutartis[$i]->getData()->format('Y-m-d') >= $nuo)
            $arr[$index] = ["id" => $sutartis[$i]->getId(), "data" => $sutartis[$i]->getData()->format('Y-m-d H:i:s'),
                "papildomossalygos" => $sutartis[$i]->getPapildomosSalygos()];
                $index++;
            }
        return $arr;
    }

    private function sutartysToArrayID($sutartis, $nuo, $iki){
        $arr = [];
        $index = 0;
        for ($i=0; $i < count($sutartis); $i++) { 
            if($sutartis[$i]->getId() <= $iki && $sutartis[$i]->getId() >= $nuo)
            $arr[$index] = ["id" => $sutartis[$i]->getId(), "data" => $sutartis[$i]->getData()->format('Y-m-d H:i:s'),
                "papildomossalygos" => $sutartis[$i]->getPapildomosSalygos()];
                $index++;
            }
        return $arr;
    }
}
