<?php

namespace App\Controller;

use App\Repository\CerealsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cereals;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id_product}", name="product")
     */
    public function index($id_product)
    {
        $product = $this->getDoctrine()
            ->getRepository(Cereals::class)
            ->find($id_product);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id_product
            );
        }

        $product->setViewCounter($product->getViewCounter() + 1);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->render('product/details.html.twig', array(
            //'controller_name' => 'ProductController',
            'product' => $product,
            'id' => $id_product,
        ));
    }


}
