<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id_product}", name="product")
     */
    public function index($id_product = 'default')
    {

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'id_product' => $id_product,
        ]);
    }
}
