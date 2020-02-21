<?php

namespace App\Controller\Api;

use App\Entity\Booking;
use App\Form\BookingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/booking")
 */
class BookingController extends AbstractController
{
    /**
     * @Route("/", name="rest_booking_index", methods={"GET"})
     */
    public function index(): Response
    {
        $bookings = $this->getDoctrine()
            ->getRepository(Booking::class)
            ->findAll();

        return new JsonResponse(json_decode($this->get('serializer')->serialize($bookings, 'json')));
    }
}
