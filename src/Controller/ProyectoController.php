<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProyectoController extends AbstractController
{
    /**
     * @Route("/", name="proyecto")
     */
    public function homepage()
    {
        return new Response("Página desarrollada en symfony!!!");
    }
    /**
     * @Route("noticias/{variable}", name="test")
     */
    public function test($variable)
    {
        return new Response(sprintf(
        	"Pasando la variable: %s",
        	$variable
        ));
    }
}
