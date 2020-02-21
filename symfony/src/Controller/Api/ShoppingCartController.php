<?php

namespace App\Controller\Api;

use App\Entity\ShoppingCart;
use App\Form\ShoppingCartType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/shopping/cart")
 */
class ShoppingCartController extends AbstractController
{
    /**
     * @Route("/", name="rest_shopping_cart_index", methods={"GET"})
     */
    public function index(): Response
    {
        $shoppingCarts = $this->getDoctrine()
            ->getRepository(ShoppingCart::class)
            ->findAll();

        return new JsonResponse(json_decode($this->get('serializer')->serialize($shoppingCarts, 'json')));
    }
}
