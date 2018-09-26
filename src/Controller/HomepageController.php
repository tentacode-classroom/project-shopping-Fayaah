<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $cerealsRepository = new CerealsRepository();
        $cereal = $cerealsRepository->findOneById($id_product);

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $products,
        ]);
    }
}
