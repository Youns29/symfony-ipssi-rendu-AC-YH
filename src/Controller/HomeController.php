<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class HomeController extends AbstractController
{
<<<<<<< HEAD
    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        $array = [
          'hello' => 'world',
            'hello2' => 'world2',
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'array' => $array,
=======
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
>>>>>>> alex
        ]);
    }
}