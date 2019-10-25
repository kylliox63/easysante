<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    public function index()
    {
    	$num = random_int(0, 100);
        return $this->render('default/index.html.twig', [
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
