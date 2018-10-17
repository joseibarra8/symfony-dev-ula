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
       /* return new Response(sprintf(
        	"Pasando la variable: %s",
        	$variable
        ));*/
        $comentarios = [
                'comentario1',
                'comentario2',
                'comentario3'
        ];
        return $this->render('articulo/show.html.twig',[
 			'titulo' => ucwords(str_replace('-', ' ', $variable)),
 			'contenido' => ucwords(str_replace('-', ' ', 'Está es una prueba symfony')),
 			'comentarios' =>  $comentarios
        ]);
    }
}
