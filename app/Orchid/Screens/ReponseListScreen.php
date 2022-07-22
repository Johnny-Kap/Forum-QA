<?php

namespace App\Orchid\Screens;

use App\Models\Reponse;
use App\Orchid\Layouts\ReponseListLayout;
use Orchid\Screen\Screen;

class ReponseListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'reponses' => Reponse::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Toutes les réponses';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ReponseListLayout::class
        ];
    }
}
