<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DisclaimerController extends AbstractController
{
    #[Route('/', name: 'app_disclaimer')]
    public function index(): Response
    {
        return $this->render('disclaimer/index.html.twig', [
            'controller_name' => 'DisclaimerController',
        ]);
    }
}
