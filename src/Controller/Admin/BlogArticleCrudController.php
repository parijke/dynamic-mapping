<?php

namespace App\Controller\Admin;

use App\Entity\BlogArticle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BlogArticle::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
