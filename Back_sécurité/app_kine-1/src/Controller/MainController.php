<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
 
    }

    #[Route('/getData', name: 'app_getData')]
    public function getData(): Response
    {
        return $this->json([
            'data' => "ça ne fonctionne pas!!",
            'data1' => "en fait oui ça fonctionne!!",
        ]);
    }

}
