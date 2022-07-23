<?php

namespace App\Orchid\Screens;

use App\Models\Message;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\MessageListLayout;

class MessageListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        $messages = Message::paginate();

        $messages_count = Message::count();

        return [
            'messages' => $messages,

            'metrics' => [
                'total'    => number_format($messages_count),
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
        return 'Tous les messages';
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
                'Total de messages' => 'metrics.total',
            ]),
            MessageListLayout::class
        ];
    }
}
