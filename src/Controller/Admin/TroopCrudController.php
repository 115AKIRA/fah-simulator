<?php

namespace App\Controller\Admin;

use App\Entity\Troop;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class TroopCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Troop::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('image'),
            BooleanField::new('is_dieAtEndOfTurn'),
            NumberField::new('torso_threshhold'),
            AssociationField::new('limbs')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),

        ];
    }
    
}
