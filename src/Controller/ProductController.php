<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;

final class ProductController extends AbstractController
{
    #[Route('/elegance', name: 'app_elegance')]
    public function elegance(ProductRepository $productRepository): Response
    {

        $produitElegance = $productRepository->findBy(['category' => '2']);
        return $this->render('product/elegance.html.twig', [
            'produitElegance' => $produitElegance,
        ]);
    
    }
}
