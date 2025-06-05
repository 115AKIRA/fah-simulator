<?php

namespace App\Controller\Admin;

use App\Entity\StateEffect;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class StateEffectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return StateEffect::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('value'),
            AssociationField::new('id_state')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
            AssociationField::new('id_effect')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
        ];
    }
    
}
