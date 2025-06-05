<?php

namespace App\Controller\Admin;

use App\Entity\Weapon;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class WeaponCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Weapon::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('description'),
            TextField::new('icon'),
            NumberField::new('attack'),
            AssociationField::new('element_id')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
        ];
    }
    
}
