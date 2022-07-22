<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class VoteListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'votes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user', 'Utilisateur')->render(function($votes){
                return $votes->users->name;
            }),
            TD::make('reponse', 'Réponse')->render(function($votes){
                return $votes->reponses->contenu;
            }),
            TD::make('vote', 'Vote')->render(function($votes){
                if($votes->vote == 1){
                    return $votes = 'Positif';
                }else{
                    return $votes = 'Négatif';
                }
            }),
            TD::make('created_at', 'Date de création')->sort(),
        ];
    }
}
