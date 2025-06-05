<?php

namespace App\Controller\Admin;

use App\Entity\LimbSkill;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class LimbSkillCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LimbSkill::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('rating'),
            NumberField::new('skill_occurence'),
            TextField::new('skill_trigger'),
            AssociationField::new('id_limb')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
            AssociationField::new('id_skill')
            ->autocomplete()
            ->setFormTypeOption('by_reference', false),
        ];
    }
    
}
