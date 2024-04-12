<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = $this->getListaDeSeries();
        $seriesOrdenadas = $this->getSeriesOrdenadas($series);

        return view('series.index', compact('series', 'seriesOrdenadas'));
    }

    private function getListaDeSeries(): array
    {
        return [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
            'Breaking Bad',
            'Game of Thrones',
            'Friends',
            'The Office',
            'Stranger Things',
            'Peaky Blinders',
            'The Walking Dead',
            'House of Cards',
            'Money Heist (La Casa de Papel)',
            'Narcos',
            'Sherlock',
            'The Crown',
            'The Wire',
            'Dexter',
            'Suits',
            'Prison Break',
            'How I Met Your Mother'
        ];
    }

    private function getSeriesOrdenadas(array $series): array
    {
        asort($series);
        return $series;
    }
    public function create()
    {
        return view('series.create');
    }

}
