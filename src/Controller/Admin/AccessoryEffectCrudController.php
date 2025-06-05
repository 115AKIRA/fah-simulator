<?php

namespace App\Controller\Admin;

use App\Entity\AccessoryEffect;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class AccessoryEffectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AccessoryEffect::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('value'),
            AssociationField::new('id_accessory')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
            AssociationField::new('id_effect')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
        ];
    }
}
