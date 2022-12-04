<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FilterType;
use App\Form\RegistrationFormType;
use App\Repository\ArticleRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(protected AuthorizationCheckerInterface $authorizationChecker)
    {
    }
    #[Route('', name: 'app_admin')]
    public function index(Request $request,ArticleRepository $articleRepository, ProductRepository $productRepository): Response
    {
        $articles = $articleRepository->findByCreatedDate(10, 1);
        $products = $productRepository->findByCreatedDate(10, 1, 1);

        $form = $this->createForm(FilterType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $limit = $form->get('limit')->getData();
            $author = $form->get('author')->getData();
            $authorId = $author->getId();

        return $this->redirectToRoute('app_admin_articles', ["limit" => $limit, "author" => $authorId]);
        }
        return $this->render('admin/index.html.twig', [
            'articles' => $articles,
            'products' => $products,
            'form' => $form->createView()
        ]);

    }
    #[Route('/articles/{limit}/{author}', name: 'app_admin_articles')]
    public function getArticles(ArticleRepository $articleRepository, $limit, $author) {

        $filters = $articleRepository->findByCreatedDate($limit, $author);
    }
}
