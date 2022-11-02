<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $ar, CategoryRepository $cr, ImageRepository $ir): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categories' => $cr,
            'articles' => $ar,
            'images' => $ir
        ]);
    }
}
