<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ReponseListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'reponses';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user', 'Utilisateur')->render(function($reponses){
                return $reponses->users->name;
            }),
            TD::make('question', 'Question')->render(function($reponses){
                return $reponses->questions->titre;
            }),
            TD::make('contenu', 'Contenu'),
            TD::make('created_at', 'Date de création'),
        ];
    }
}
