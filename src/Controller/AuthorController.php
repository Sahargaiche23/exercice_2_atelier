<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route("/authors", name: "author_list")]
    public function list(): Response
    {
        $authors = [
            ['id' => 1, 'picture' => '/images/victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            ['id' => 2, 'picture' => '/images/william-shakespeare.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            ['id' => 3, 'picture' => '/images/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];
        return $this->render('author/list.html.twig', [
            'authors' => $authors,
        ]);
    }

    #[Route("/authors/{id}", name: "author_details")]
    public function authorDetails($id): Response
    {
        
        $authorDetails = [
            'username' => 'Nom de l\'auteur',
            'picture' => '/images/auteur.jpg',
            'email' => 'email@auteur.com',
            'nb_books' => 10,
        ];
        
        return $this->render('author/showAuthor.html.twig', [
            'author' => $authorDetails,
            'authorId' => $id,
        ]);
    }
}
