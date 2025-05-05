<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



final class CartController extends AbstractController
{
    #[Route('/panier/ajouter/{id}', name: 'cart_add', methods: ['POST'])]
    public function add(Product $product, Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        $quantite = $request->request->getInt('quantity', 1);

        if (isset($panier[$product->getId()])) {
            $panier[$product->getId()] += $quantite;
        } else {
            $panier[$product->getId()] = $quantite;
        }

        $session->set('panier', $panier);
        $this->addFlash('success_add_to_cart', 'Produit ajouté avec succès !');
        return $this->redirectToRoute('app_show', ['id' => $product->getId()]);
    }

    #[Route('/cart', name: 'app_cart')]
    public function show(SessionInterface $session, ProductRepository $productRepository): Response
    {
        $panier = $session->get('panier', []);
        $panierDetails = [];
        $total = 0;
        $shipping = 5.0;


        foreach ($panier as $id => $quantity) {
            $product = $productRepository->find($id);
            if ($product) {
                $subtotal = $product->getPrice() * $quantity;
                $panierDetails[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
                $total += $subtotal;

            }
        }
        $totalWithShipping = $total + $shipping;


        return $this->render('cart/show.html.twig', [
            'items' => $panierDetails,
            'total' => $total,
            'shipping' => $shipping,
            'totalWithShipping' => $totalWithShipping,
        ]);
}

    #[Route('/cart/update/{id}', name: 'cart_update', methods: ['POST'])]
    public function update(Product $product, Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        $quantite = $request->request->getInt('quantity', 1);

        if ($quantite > 0) {
            $panier[$product->getId()] = $quantite;
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/remove/{id}', name: 'cart_remove', methods: ['POST'])]
    public function remove(Product $product, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        unset($panier[$product->getId()]);
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_cart');
}




}
