<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */

class HomeController extends AbstractController
{
    /**
     * @Route("/home")
     * (routes.yaml avec /home/)
     */
    public function index(){
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'HomeController',
            'current_menu' => 'home',
        ]);
    }
    /**
     * @Route("/myagency")
     * (routes.yaml avec /) 
     */
    public function base(){
        return $this->render('base.html.twig');
    }
}
