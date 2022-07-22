<?php

namespace App\Orchid\Screens;

use App\Models\Vote;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\VoteListLayout;

class VoteListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        $votes = Vote::paginate();

        $votes_count = Vote::count();

        $votes_pos = Vote::where('vote', 1)->count();

        $votes_neg = Vote::where('vote', -1)->count();

        return [
            'votes' => $votes,

            'metrics' => [
                'sales'    => ['value' => number_format($votes_pos)],
                'visitors' => ['value' => number_format($votes_neg)],
                'total'    => number_format($votes_count),
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
        return 'Tous les votes';
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
                'Nombre de votes positifs'    => 'metrics.sales',
                'Nombre de votes négatifs' => 'metrics.visitors',
                'Total de votes' => 'metrics.total',
            ]),
            VoteListLayout::class,
        ];
    }
}
