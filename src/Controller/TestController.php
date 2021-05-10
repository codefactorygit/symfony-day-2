<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'name' => 'Serri', 'age' => 30
        ]);
    }

    public function home(): Response
    {
        return $this->render('test/home.html.twig', array("name"=>"Serri"));
    }
}
