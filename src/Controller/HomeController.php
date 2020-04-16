<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index(){
        return $this->render('home.html.twig');
    }
    // public function base(){
    //     return $this->render('base.html.twig');
    // }
}