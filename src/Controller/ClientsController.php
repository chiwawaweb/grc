<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientsController extends Controller
{
    /**
     * @Route("/clients", name="clients")
     */
    public function index()
    {
        return $this->render('clients/index.html.twig', [
            'controller_name' => 'ClientsController',
        ]);
    }
}
