<?php

namespace App\Controller\Admin;

use App\Entity\Help;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HelpCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Help::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('name'),
            TextEditorField::new('description'),
            AssociationField::new('user'),
        ];
    }

}
