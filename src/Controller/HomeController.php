<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home page")
     *
     */
    public function index()
    {
        $array='';
        return $this->render('annonce/index.html.twig' ,
        [
            "HOME PAGE",
            'controller_name' => 'AnnonceController',
            'value_array' => $array,
            'date' => date('d/m/Y')
        ]);
    }

}