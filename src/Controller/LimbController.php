<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Limb;

final class LimbController extends AbstractController
{
    #[Route('/limb', name: 'app_limb')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $limb = new Limb();
        $limb->setName('Guard [right leg]');
        $limb->setMaxHP(20);
        $limb->setBluntRes(100);
        $limb->setSlashingRes(115);
        $limb->setPiercingRes(100);
        $limb->setFireRes(100);
        $limb->setOtherworldlyRes(100);
        $limb->setEvasion(5);
        $limb->setMagicalEvasion(0);
        $limb->setHardMaxHP(20);
        $limb->setAccuracy(95);

        $entityManager->persist($limb);
        $entityManager->flush();

        return new Response('Saved new limb with id '.$limb->getId());
    }
}
