<?php

namespace App\Orchid\Screens;

use App\Models\Reponse;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\ReponseListLayout;

class ReponseListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        $reponses  = Reponse::paginate();

        $reponses_count = Reponse::count();

        $reponses_on = Reponse::has('votes')->count();

        $reponses_off = Reponse::doesntHave('votes')->count();

        return [
            'reponses' => $reponses,

            'metrics' => [
                'sales'    => ['value' => number_format( $reponses_off)],
                'visitors' => ['value' => number_format($reponses_on)],
                'total'    => number_format($reponses_count),
            ],
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
            Layout::metrics([
                'Nombre de réponses sans votes'    => 'metrics.sales',
                'Nombre de réponses avec votes' => 'metrics.visitors',
                'Total de réponses' => 'metrics.total',
            ]),
            ReponseListLayout::class
        ];
    }
}
