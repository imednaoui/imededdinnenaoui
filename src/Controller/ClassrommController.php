<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassrommController extends AbstractController
{
    /**
     * @Route("/classromm", name="classromm")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController'
        ]);
    }
        /**
         * @Route("/list",name="list")
         */
        public
        function liste()
        {
            $classrooms=$this->getDoctrine()->getRepository(Classroom::class)->findAll();
            return $this->render("classroom/classrommliste.html.twig",array("tabclass"=>$classrooms));
        }
    /**
     * @Route("/listclassromm", name="listclassroom")
     */

        public  function add(\Symfony\Component\HttpFoundation\Request $request){
            $classroom=new  Classroom();
            $form=$this->createForm(ClassroomType::class,$classroom);
            $form->handleRequest($request);


            if($form->isSubmitted()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($classroom);
                $em->flush();
                return $this->redirectToRoute("student.html.twig");
            }
            return$this->render("classroom/add.html.twig",array("formclassroom"=>$form->createView()));
        }
public function __toString()
{
    // TODO: Implement __toString() method.
    return(string)$this->g;
}







}
