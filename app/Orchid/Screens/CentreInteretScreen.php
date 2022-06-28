<?php

namespace App\Orchid\Screens;

use App\Models\User;
use App\Models\Centre;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;

class CentreInteretScreen extends Screen
{

    public $centre;

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
        return 'Centre Interet';
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
                ->route('platform.centre.interet.list')
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
                Input::make('centre.label')
                    ->title('Le label')
                    ->placeholder('Entrer un label')
                    ->horizontal()
                    ->required(),

                Relation::make('centre.user_id')
                    ->title('Author')
                    ->horizontal()
                    ->fromModel(User::class, 'id')
                    ->required(),

                Button::make('Enregistrer')
                    ->method('register')
                    ->type(Color::DEFAULT()),

            ])->title('Engistrer un centre interet'),
        ];
    }

    public function register(Request $request, Centre $centre)
    {
        $centre->fill($request->get('centre'))->save();

        Alert::info('Le centre interet a été créé avec susscès.');

        return redirect()->route('platform.centre.interet');
    }
}
