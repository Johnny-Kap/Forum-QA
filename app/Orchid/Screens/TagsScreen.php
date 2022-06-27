<?php

namespace App\Orchid\Screens;

use App\Models\Tags;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;

class TagsScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Tags';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Liste')
                ->icon('list')
                ->route('platform.tags.list')
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
            Layout::rows([
                Input::make('tags.title')
                    ->title('Titre')
                    ->placeholder('Entrer un Tag')
                    ->horizontal()
                    ->required(),

                Input::make('tags.detail')
                    ->title('Description')
                    ->placeholder('Entrer une description')
                    ->horizontal(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un Tag'),
        ];
    }

    public function register(Request $request, Tags $tags)
    {
        $tags->fill($request->get('tags'))->save();

        Alert::info('Le Tags a été ajouté avec succès.');

        return redirect()->route('platform.tags');
    }

}
