<?php

namespace App\Orchid\Screens;

use App\Models\Centre;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\CentreListLayout;

class CentreInteretListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        $centres = Centre::paginate();

        return [
            'centres' => $centres
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
        return [
            Link::make('Ajouter')
                ->icon('plus')
                ->route('platform.centre.interet')
        ];
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
