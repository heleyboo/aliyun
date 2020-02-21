<?php

namespace App\Controller\Api;

use App\Entity\DeliveryAddress;
use App\Form\DeliveryAddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/delivery/address")
 */
class DeliveryAddressController extends AbstractController
{
    /**
     * @Route("/", name="rest_delivery_address_index", methods={"GET"})
     */
    public function index(): Response
    {
        $deliveryAddresses = $this->getDoctrine()
            ->getRepository(DeliveryAddress::class)
            ->findAll();

        return new JsonResponse(json_decode($this->get('serializer')->serialize($deliveryAddresses, 'json')));
    }
}
