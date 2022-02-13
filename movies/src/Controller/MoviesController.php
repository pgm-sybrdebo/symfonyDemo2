<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
  private $em;
  public function __construct(EntityManagerInterface $em)
  {
    $this->em = $em;
  }

  #[Route('/movies', name: 'movies')]
  public function index(): Response
  // public function index(MovieRepository $movieRepository): Response
  {
    // $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow"];
    // $movies = $movieRepository->findAll();


    // findAll() - SELECT * FROM movies;
    // find(5) - SELECT * FROM movies WHERE id = 5
    // findBy([], ['id' => 'DESC']) - SELECT * FROM movies ORDER BY id DESC
    // findOneBy(['id' => 6, 'title' => 'The Dark Knight'], ['id' => 'DESC']); - SELECT * FROM movies WHERE id = 6 AND title = 'The Dark Knight' ORDER BY id DESC
    // count(['id' => 5]); - SELECT COUNT() FROM movies WHERE id = 5
    // $repository = $this->em->getRepository(Movie::class);
    // $movies = $repository->getClassName();
    // dd($movies);
    return $this->render(
      'index.html.twig',
      // array('movies' => $movies)
      // ['title' => 'Avengers Endgame']
    );
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
