<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LimbRepository;
use App\Entity\Limb;
use App\Entity\Troop;

final class TroopController extends AbstractController
{
    #[Route('/troop', name: 'app_troop')]
    public function index(EntityManagerInterface $entityManager, LimbRepository $limbRepository): Response
    {

        $troop = new Troop();
        $troop->setName("Guard");
        $troop->setImage("https://fearandhunger.wiki.gg/images/7/74/Guard.png?519ff8=&format=original");
        $troop->setIsDieAtEndOfTurn(true);
        $troop->setTorsoThreshhold(75);
    
        for($i = 1; $i < 8; $i++) {
            $limb = $limbRepository->find($i);
            $troop->addLimb($limb);
        }

        $entityManager->persist($troop);
        $entityManager->flush();

        return new Response('Saved new limb with id '.$troop->getId());
    }
}
