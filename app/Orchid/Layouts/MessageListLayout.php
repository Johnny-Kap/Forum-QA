<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MessageListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'messages';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('users', 'Utilisateur')->render(function($messages){
                return $messages->user->name;
            }),
            TD::make('message', 'Message'),
            TD::make('created_at', 'Date d\'envoi')->sort(),
        ];
    }
}
