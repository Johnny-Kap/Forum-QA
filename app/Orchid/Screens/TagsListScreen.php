<?php

namespace App\Orchid\Screens;

use App\Models\Tags;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\TagsListLayout;

class TagsListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'tags' => Tags::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des Tags';
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
                ->route('platform.tags')
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
            TagsListLayout::class
        ];
    }
}
