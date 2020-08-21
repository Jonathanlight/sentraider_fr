<?php

namespace App\Controller\Admin;

use App\Entity\City;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return City::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des villes')
            ->overrideTemplate('crud/edit', 'bundles/EasyAdminBundle/custom/crud_edit_custom.html.twig')
            ->overrideTemplate('crud/index', 'bundles/EasyAdminBundle/custom/crud_index_custom.html.twig')
            ->overrideTemplate('crud/detail', 'bundles/EasyAdminBundle/custom/crud_detail_custom.html.twig')
            ->overrideTemplate('crud/new', 'bundles/EasyAdminBundle/custom/crud_new_custom.html.twig')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        $imageField = ImageField::new('imageFile')
            ->setFormType(VichImageType::class)
            ->setLabel('Image');

        $image = ImageField::new('image')
            ->setBasePath("/uploads/images")
            ->setLabel('Image');

        $fields = [
            IntegerField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('slug')
                ->setTemplatePath('bundles/EasyAdminBundle/field_custom.html.twig'),
            TextField::new('name')
                ->setTemplatePath('bundles/EasyAdminBundle/field_custom.html.twig'),
        ];

        if ($pageName === Crud::PAGE_INDEX || $pageName === Crud::PAGE_DETAIL) {
            $fields[] = $image;
        } else {
            $fields[] = $imageField;
        }

        return $fields;
    }

}
