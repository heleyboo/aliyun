<?php

namespace App\Controller\Api;

use App\Entity\Order;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/orders")
 */
class OrderController extends AbstractController
{
    /**
     * @Route("/", name="rest_order_index", methods={"GET"})
     */
    public function index(): Response
    {
        $orders = $this->getDoctrine()
            ->getRepository(Order::class)
            ->findAll();

        return new JsonResponse(json_decode($this->get('serializer')->serialize($orders, 'json')));
    }
}
