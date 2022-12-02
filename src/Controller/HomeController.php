<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use app\Controller\ArticleController;
use app\form\ArticleType;
use App\Entity\category;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/')]
class HomeController extends AbstractController
{
    public function __construct( protected ManagerRegistry $registery, protected UserPasswordHasherInterface $encoder)

    {
    }

    #[Route('', name: 'app_home')]
    public function index(ManagerRegistry $registry): Response
    {
        $articleRepository= $this->registery->getRepository(
            Article::class
        );
        $articles= $articleRepository->find(1);

        $articleTitle = $articles->getTitle();
#        dd($articles);
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
}
        #[Route('/create_user', name: 'app_create_user')]
    public function createUser(UserRepository $userRepository): Response
    {
        $user = new User();
        $user->setEmail('john@go.com');
        $user->setLastname('Doe');
        $user->setFirstname('John');
        $user->setProfilepicture('https://picsum.photos/200');
        $user->setRoles(['ROLE_USER']);
        $plainPassword = "123456";
        $password= $this->encoder->hashPassword($user, $plainPassword);
        $user->setPassword($password);
        $entityManager = $this->registery->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('app_home');
}
}
