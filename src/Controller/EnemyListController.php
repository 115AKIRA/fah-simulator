<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Troop;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EnemyListController extends AbstractController
{
    #[Route('/enemy', name: 'app_enemy_list')]
    public function index(EntityManagerInterface $emi): Response
    {

        $troops = $emi->getRepository(Troop::class)->findAll();

        return $this->render('enemy_list/index.html.twig', [
            'troops' => $troops,
        ]);
    }
}
