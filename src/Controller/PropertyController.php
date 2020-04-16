<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/",name="property.")
 */

class PropertyController extends AbstractController
{
    /**
     * @Route("/estate", name="index")
     */
    public function index()
    {
        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
            'current_menu' => 'properties',
        ]);
    }
}
