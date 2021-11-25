<?php

namespace AdminScore;

use App\Entity\Scores;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ScoresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Scores::class;
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
