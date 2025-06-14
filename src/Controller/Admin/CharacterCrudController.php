<?php

namespace App\Controller\Admin;

use App\Entity\Character;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CharacterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Character::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('image'),
            TextField::new('back_image'),
            NumberField::new('attack'),
            NumberField::new('agility'),
            AssociationField::new('armor_restrict_type'),
            AssociationField::new('weapon_restrict_type')
        ];
    }
    
}
