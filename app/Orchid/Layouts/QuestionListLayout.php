<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class QuestionListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'questions';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('users', 'Utilisateur')->render(function($questions){
                return $questions->users->name;
            }),
            TD::make('centre', 'Centre d\'interet')->render(function($questions){
                return $questions->centres->label;
            }),
            TD::make('tag', 'Tags')->render(function($questions){
                return $questions->tags->title;
            }),
            TD::make('titre', 'Titre'),
            TD::make('contenu', 'Contenu'),
            TD::make('created_at', 'Date de création')->sort(),
        ];
    }
}
