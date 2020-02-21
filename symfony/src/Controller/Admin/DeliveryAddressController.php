<?php

namespace App\Controller\Admin;

use App\Entity\DeliveryAddress;
use App\Form\DeliveryAddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/delivery/address")
 */
class DeliveryAddressController extends AbstractController
{
    /**
     * @Route("/", name="delivery_address_index", methods={"GET"})
     */
    public function index(): Response
    {
        $deliveryAddresses = $this->getDoctrine()
            ->getRepository(DeliveryAddress::class)
            ->findAll();

        return $this->render('delivery_address/index.html.twig', [
            'delivery_addresses' => $deliveryAddresses,
        ]);
    }

    /**
     * @Route("/new", name="delivery_address_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $deliveryAddress = new DeliveryAddress();
        $form = $this->createForm(DeliveryAddressType::class, $deliveryAddress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($deliveryAddress);
            $entityManager->flush();

            return $this->redirectToRoute('delivery_address_index');
        }

        return $this->render('delivery_address/new.html.twig', [
            'delivery_address' => $deliveryAddress,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{sid}", name="delivery_address_show", methods={"GET"})
     */
    public function show(DeliveryAddress $deliveryAddress): Response
    {
        return $this->render('delivery_address/show.html.twig', [
            'delivery_address' => $deliveryAddress,
        ]);
    }

    /**
     * @Route("/{sid}/edit", name="delivery_address_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DeliveryAddress $deliveryAddress): Response
    {
        $form = $this->createForm(DeliveryAddressType::class, $deliveryAddress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('delivery_address_index');
        }

        return $this->render('delivery_address/edit.html.twig', [
            'delivery_address' => $deliveryAddress,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{sid}", name="delivery_address_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DeliveryAddress $deliveryAddress): Response
    {
        if ($this->isCsrfTokenValid('delete'.$deliveryAddress->getSid(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($deliveryAddress);
            $entityManager->flush();
        }

        return $this->redirectToRoute('delivery_address_index');
    }
}
