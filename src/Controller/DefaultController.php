<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    public function indexb()
    {
    	$num = random_int(0, 100);
        return $this->render('default/bootstrap.html.twig', [
        	'number' => $num,
        	'page_title' => 'Welcome !'.$num.'abc',
            'controller_name' => 'DefaultController',
        ]);
    }

    public function indexm()
    {
        $num = random_int(0, 100);
        return $this->render('default/materialize.html.twig', [
            'number' => $num,
            'page_title' => 'Welcome !'.$num.'abc',
            'controller_name' => 'DefaultController',
        ]);
    }

    public function index1()
    {
        return new Response('<h1>Page d\'accueil</h1>');
    }

}
