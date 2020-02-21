<?php

namespace App\Controller\Admin;

use App\Entity\ShoppingCart;
use App\Form\ShoppingCartType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/shopping/cart")
 */
class ShoppingCartController extends AbstractController
{
    /**
     * @Route("/", name="shopping_cart_index", methods={"GET"})
     */
    public function index(): Response
    {
        $shoppingCarts = $this->getDoctrine()
            ->getRepository(ShoppingCart::class)
            ->findAll();

        return $this->render('shopping_cart/index.html.twig', [
            'shopping_carts' => $shoppingCarts,
        ]);
    }

    /**
     * @Route("/new", name="shopping_cart_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $shoppingCart = new ShoppingCart();
        $form = $this->createForm(ShoppingCartType::class, $shoppingCart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($shoppingCart);
            $entityManager->flush();

            return $this->redirectToRoute('shopping_cart_index');
        }

        return $this->render('shopping_cart/new.html.twig', [
            'shopping_cart' => $shoppingCart,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{sid}", name="shopping_cart_show", methods={"GET"})
     */
    public function show(ShoppingCart $shoppingCart): Response
    {
        return $this->render('shopping_cart/show.html.twig', [
            'shopping_cart' => $shoppingCart,
        ]);
    }

    /**
     * @Route("/{sid}/edit", name="shopping_cart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ShoppingCart $shoppingCart): Response
    {
        $form = $this->createForm(ShoppingCartType::class, $shoppingCart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shopping_cart_index');
        }

        return $this->render('shopping_cart/edit.html.twig', [
            'shopping_cart' => $shoppingCart,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{sid}", name="shopping_cart_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ShoppingCart $shoppingCart): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shoppingCart->getSid(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($shoppingCart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('shopping_cart_index');
    }
}
