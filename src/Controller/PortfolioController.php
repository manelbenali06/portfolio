<?php

namespace App\Controller;


use App\Repository\PortfolioRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'portfolio')]
    public function index(PortfolioRepository $portfolioRepository): Response
    {
        ->setTitle('Je suis un titre')
        ->setDescription('Mon premier projet !')
        
    $portfolio = $portfolioRepository->findAll();
        return $this->render('portfolio/index.html.twig', [
            'portfolio' => $portfolio
        ]);
    }
}
