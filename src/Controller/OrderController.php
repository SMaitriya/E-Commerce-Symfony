<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/order')]
class OrderController extends AbstractController
{
    #[Route('/checkout', name: 'order_checkout')]
    #[IsGranted('ROLE_USER')]
    public function checkout(SessionInterface $session): Response
    {
        $session->remove('panier');
        return $this->render('order/checkout.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}

