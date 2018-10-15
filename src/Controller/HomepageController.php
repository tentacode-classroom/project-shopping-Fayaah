<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CerealsRepository;
use App\Entity\Cereals;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        $cereals = $this->getDoctrine()
            ->getRepository(Cereals::class)
            ->orderProductByPrice();

        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $cereals,
        ]);
    }
}
