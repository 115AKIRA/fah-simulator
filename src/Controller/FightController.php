<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Troop;
use App\Entity\Skill;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FightController extends AbstractController
{
    #[Route('/enemy/{id}', name: 'app_fight', requirements: ['id' => '\d+'])]
    public function index(EntityManagerInterface $emi, int $id): Response
    {

        $troop = $emi->getRepository(Troop::class)->find($id);
        $skills = $emi->getRepository(Skill::class)->findAll();

        return $this->render('fight/index.html.twig', [
            'troop' => $troop,
            'skills' => $skills
        ]);
    }
}
