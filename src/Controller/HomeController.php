<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use app\Controller\ArticleController;

#[Route('/')]
class HomeController extends AbstractController
{
    public function __construct( protected ManagerRegistry $registery)
    {
    }

    #[Route('', name: 'app_home')]
    public function index(ManagerRegistry $registry): Response
    {
        $articleRepository= $this->registery->getRepository(
            Article::class
        );
        $articles= $articleRepository->find(1);
        $array = [
          'hello' => 'world',
            'hello2' => 'world2',
        ];
        dd($articles);
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
}

}
