<?php

namespace App\Orchid\Screens;

use App\Models\Centre;
use App\Orchid\Layouts\CentreListLayout;
use Orchid\Screen\Screen;

class CentreInteretListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'centres' => Centre::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des centre interet';
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
            CentreListLayout::class
        ];
    }
}
