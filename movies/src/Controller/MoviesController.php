<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
  #[Route('/movies', name: 'movies')]
  public function index(): Response
  {
    return $this->render('index.html.twig', [
      'title' => 'Avengers Endgame'
    ]);
  }

  // #[Route('/movies2/{name}', name: 'movies2', defaults: ['name' => null], methods: ['GET', 'HEAD'])]
  // public function index($name): Response
  // {
  //   return $this->json([
  //     'message' => $name,
  //     'path' => 'src/Controller/MoviesController.php',
  //   ]);
  // }


  /**
   * oldMethod
   *
   * @Route("/old", name="old")
   */
  public function oldMethod(): Response
  {
    return $this->json([
      'message' => 'Old method!',
      'path' => 'src/Controller/MoviesController.php',
    ]);
  }
}
