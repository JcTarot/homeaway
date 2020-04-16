<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/",name="home_")
 */

class HomeController extends AbstractController
{
    /**
     * @Route("/home",name="away")
     * (routes.yaml avec /)
     */
    public function index(){
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'HomeController',
            'current_menu' => 'home',
        ]);
    }
    /**
     * @Route("/myagency",name="myagency")
     * (routes.yaml avec /base) 
     */
    public function base(){
        return $this->render('base.html.twig');
    }
}