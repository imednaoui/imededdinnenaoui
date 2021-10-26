<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\Stdnt;
use App\Form\ClassroomType;
use App\Form\StdntType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);


    }
    /**
     * @Route("/listestudent", name="listestudent")
     */
    public function liste (){
        $student=$this->getDoctrine()->getRepository(Stdnt::class)->findAll();
        return $this->render("student/student.html.twig",array("tabstudent"=>$student));
    }
    /**
     * @Route("/addstudent", name="addstudent")
     */
public function add(\Symfony\Component\HttpFoundation\Request $request){
        $student= new Stdnt() ;
        $form=$this->createForm(StdntType::class,$student);
        $form->handleRequest($request);
    if ($form->isSubmitted())
    {
        $em=$this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();
        return$this->redirectToRoute("addstudent");


    }
    return$this->render("student/addstudeént.html.twig",array("forms"=>$form->createView()));


}
    /**
     * @Route("/up{id}", name="up")
     */
public function update(Request $request,$id){
    $classroom=$this->getDoctrine()->getRepository(Classroom::class)->findBy($id);
    $form=$this->createForm(ClassroomType::class,$classroom);
    $form->handleRequest($request);
    if($form->isSubmitted()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("listeclassroom");
    }
    return $this->render("student/addstudeént.html.twig",array('formstudent'=>$form->createView()));
}
}
