<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\Club;
use App\Form\ClubType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    /**
     * @Route("/club", name="club")
     */
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);

    }
//    public function getName($var)
//    {
//        $x = 10;
//        return $this->render("club_esprit/club.html.twing", array("x" => $var, "varx" => $x));
//    }
    /**
     * @Route("/listeclub", name="listeclub")
     */
    public
    function liste()
    {
        $club=$this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render("classroom/clubliste.html.twig",array("tabclub"=>$club));
    }
    /**
     * @Route("/addclub", name="addclub")
     */
public function add(Request $request){
        $club= new Club();
        $form=$this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
           $em=$this->getDoctrine()->getManager();
           $em->persist($club);
           $em->flush();
           return $this->redirectToRoute("listeclub");
        }
        return  $this->render("club/clubliste.html.twig",array("FormClub"=>$form->createView()));
}

}
