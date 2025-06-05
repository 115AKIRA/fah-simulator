<?php

namespace App\Controller\Admin;

use App\Entity\Element;
use App\Entity\Weapon;
use App\Entity\Scope;
use App\Entity\HitType;
use App\Entity\Occasion;
use App\Entity\DamageType;
use App\Entity\Effect;
use App\Entity\State;
use App\Entity\Accessory;
use App\Entity\AccessoryEffect;
use App\Entity\Armor;
use App\Entity\ArmorType;
use App\Entity\EquipmentType;
use App\Entity\ArmorRestrictType;
use App\Entity\Character;
use App\Entity\WeaponRestrictType;
use App\Entity\Item;
use App\Entity\Skill;
use App\Entity\Limb;
use App\Entity\LimbEffect;
use App\Entity\LimbSkill;
use App\Entity\StateEffect;
use App\Entity\Troop;
use App\Entity\WeaponEffect;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        // return parent::index();

        return $this->render('admin/dashboard.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // 1.1) If you have enabled the "pretty URLs" feature:
        // return $this->redirectToRoute('admin_user_index');
        //
        // 1.2) Same example but using the "ugly URLs" that were used in previous EasyAdmin versions:
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirectToRoute('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Fah Simulator - Backoffice');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        
        yield MenuItem::linkToCrud('Element', 'fas fa-list', Element::class);
        yield MenuItem::linkToCrud('Weapon', 'fas fa-list', Weapon::class);
        yield MenuItem::linkToCrud('Scope', 'fas fa-list', Scope::class);
        yield MenuItem::linkToCrud('Hit type', 'fas fa-list', HitType::class);
        yield MenuItem::linkToCrud('Occasion', 'fas fa-list', Occasion::class);
        yield MenuItem::linkToCrud('Damage type', 'fas fa-list', DamageType::class);
        yield MenuItem::linkToCrud('Effects', 'fas fa-list', Effect::class);
        yield MenuItem::linkToCrud('State', 'fas fa-list', State::class);
        yield MenuItem::linkToCrud('Accessory', 'fas fa-list', Accessory::class);
        yield MenuItem::linkToCrud('Accessory Effect', 'fas fa-list', AccessoryEffect::class);
        yield MenuItem::linkToCrud('Armor', 'fas fa-list', Armor::class);
        yield MenuItem::linkToCrud('Armor Type', 'fas fa-list', ArmorType::class);
        yield MenuItem::linkToCrud('Equipment Type', 'fas fa-list', EquipmentType::class);
        yield MenuItem::linkToCrud('Armor Restrict Type', 'fas fa-list', ArmorRestrictType::class);
        yield MenuItem::linkToCrud('Character', 'fas fa-list', Character::class);
        yield MenuItem::linkToCrud('Weapon Restrict Type', 'fas fa-list', WeaponRestrictType::class);
        yield MenuItem::linkToCrud('Item', 'fas fa-list', Item::class);
        yield MenuItem::linkToCrud('Skill', 'fas fa-list', Skill::class);
        yield MenuItem::linkToCrud('Limb', 'fas fa-list', Limb::class);
        yield MenuItem::linkToCrud('Limb Effect', 'fas fa-list', LimbEffect::class);
        yield MenuItem::linkToCrud('Limb Skill', 'fas fa-list', LimbSkill::class);
        yield MenuItem::linkToCrud('State Effect', 'fas fa-list', StateEffect::class);
        yield MenuItem::linkToCrud('Troop', 'fas fa-list', Troop::class);
        yield MenuItem::linkToCrud('Weapon effect', 'fas fa-list', WeaponEffect::class);

    }
}
