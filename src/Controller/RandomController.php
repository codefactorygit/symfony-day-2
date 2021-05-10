<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    public function index($num): Response
    {
        $a = random_int(0, $num);
        return $this->render('random/index.html.twig', [
            'number' => $a,
        ]);
    }

    public function printName($name): Response
    {
        
        return $this->render('random/who_am_i.html.twig', [
            'y' => $name,
        ]);
    }
}
