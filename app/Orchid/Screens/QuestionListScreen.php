<?php

namespace App\Orchid\Screens;

use App\Models\Question;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\QuestionListLayout;

class QuestionListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        $questions = Question::paginate(10);

        $questions_count = Question::count();

        $questions_on = Question::has('reponses')->count();

        $questions_off = Question::doesntHave('reponses')->count();

        return [
            'questions' => $questions,

            'metrics' => [
                'sales'    => ['value' => number_format($questions_off)],
                'visitors' => ['value' => number_format($questions_on)],
                'total'    => number_format($questions_count),
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
        return 'Toutes les questions';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            // Button::make('Export file')
            //     ->method('export')
            //     ->icon('cloud-download')
            //     ->rawClick()
            //     ->novalidate(),
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
            Layout::metrics([
                'Nombre de questions sans réponses'    => 'metrics.sales',
                'Nombre de questions avec réponses' => 'metrics.visitors',
                'Total de questions' => 'metrics.total',
            ]),
            QuestionListLayout::class
        ];
    }

    public function export()
    {
        return response()->streamDownload(function () {

            $csv = tap(fopen('php://output', 'wb'), function ($csv) {
                fputcsv($csv, ['Utilisateur', 'Titre', 'Contenu']);
            });

            collect([
                ['row1:col1', 'row1:col2', 'row1:col3'],
                ['row2:col1', 'row2:col2', 'row2:col3'],
                ['row3:col1', 'row3:col2', 'row3:col3'],
            ])->each(function (array $row) use ($csv) {
                fputcsv($csv, $row);
            });

            return tap($csv, function ($csv) {
                fclose($csv);
            });
        }, 'File-name.csv');
    }
}
