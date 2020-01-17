<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArcEnCielController extends AbstractController
{
    /**
     * @Route("/", name="arc_en_ciel")
     */
    public function index()
    {
        return $this->render('arc_en_ciel/index.html.twig', [
            'controller_name' => 'ArcEnCielController',
        ]);
    }

     /**
     * @Route("/date", name="date")
     */
    public function date()
    {
        return $this->render('arc_en_ciel/date.html.twig', [
            'date' => date('d/m/Y'),
            'time' => date('H:i:s')
        ]);
    }

    /**
     * @Route("/red", name="red")
     */
    public function red()
    {
        return $this->render('arc_en_ciel/red.html.twig', [
    
        ]);
    }

    /**
     * @Route("/blue", name="blue")
     */
    public function blue()
    {
        return $this->render('arc_en_ciel/blue.html.twig', [
    
        ]);
    }

    /**
     * @Route("/orange", name="orange")
     */
    public function orange()
    {
        return $this->render('arc_en_ciel/orange.html.twig', [
    
        ]);
    }

    /**
     * @Route("/green", name="green")
     */
    public function green()
    {
        return $this->render('arc_en_ciel/green.html.twig', [
    
        ]);
    }
}