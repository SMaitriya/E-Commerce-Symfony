<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;


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

    #[Route('/sport', name:'app_sport')]
    public function sport(ProductRepository $productRepository): Response
    {

        $produitSport = $productRepository->findBy(['category' => '1']);
        return $this->render('product/sport.html.twig', [
            'produitSport' => $produitSport,
        ]);
    }

    #[Route('/produit{id}', name:'app_show')]
    public function show(Product $produit): Response
    {
        return $this->render('product/show.html.twig', [
            'produit' => $produit,
        ]);
    }


}
