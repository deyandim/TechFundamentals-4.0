<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
       return $this->render('library/index.html.twig', ['books' => $this->getDoctrine()->getRepository(Book::class)->findAll()]);
    }

    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $library = new Book();
        $form = $this->createForm(BookType::class, $library);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($library);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('library/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function edit($id, Request $request)
    {
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('library/edit.html.twig',
            [
                'book' => $book,
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, Request $request)
    {
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('library/delete.html.twig',
            [
                'book' => $book,
                'form' => $form->createView()
            ]);
    }
}