<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\Formation1Type;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/formationn")
 */
class FormationnController extends AbstractController
{
    /**
     * @Route("/", name="formationn_index", methods={"GET"})
     */
    public function index(FormationRepository $formationRepository): Response
    {
        return $this->render('formationn/index.html.twig', [
            'formations' => $formationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="formationn_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $formation = new Formation();
        $form = $this->createForm(Formation1Type::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formation);
            $entityManager->flush();

            return $this->redirectToRoute('formationn_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formationn/new.html.twig', [
            'formation' => $formation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formationn_show", methods={"GET"})
     */
    public function show(Formation $formation): Response
    {
        return $this->render('formationn/show.html.twig', [
            'formation' => $formation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="formationn_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Formation $formation): Response
    {
        $form = $this->createForm(Formation1Type::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formationn_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formationn/edit.html.twig', [
            'formation' => $formation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formationn_delete", methods={"POST"})
     */
    public function delete(Request $request, Formation $formation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formationn_index', [], Response::HTTP_SEE_OTHER);
    }
}
