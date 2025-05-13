<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/home/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('home/number.html.twig', [
            'number' => $number,
        ]);
    }

    public function test()
    {
        $name = 'franck';

        return $this->render('home/test.html.twig', [
            'name' => $name,
        ]);
    }

}