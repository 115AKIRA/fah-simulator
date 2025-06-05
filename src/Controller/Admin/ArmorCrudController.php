<?php

namespace App\Controller\Admin;

use App\Entity\Armor;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ArmorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Armor::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('description'),
            TextField::new('icon'),
            NumberField::new('blunt_res'),
            NumberField::new('slashing_res'),
            NumberField::new('piercing_res'),
            NumberField::new('fire_res'),
            NumberField::new('fire_res'),
            AssociationField::new('armor_type'),
            AssociationField::new('equipment_type')
        ];
    }
    
}
