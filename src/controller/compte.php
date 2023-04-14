<?php

namespace App\Controller;

use symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class compte extends abstractController
{
    #[Route('/compte', name: 'compte')]
    public function index(): Response
    {
        return $this->render('compte/index.html.twig', [
            'user' => $user
    ]);

    }
}