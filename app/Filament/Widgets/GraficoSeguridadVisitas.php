<?php

namespace App\Filament\Widgets;

use App\Models\TrackedVisit;
use Filament\Widgets\ChartWidget;

class GraficoSeguridadVisitas extends ChartWidget
{
    protected ?string $heading = 'HTTPS vs no HTTPS';

    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 1;

    protected function getData(): array
    {
        $https = TrackedVisit::query()->where('is_secure', true)->count();
        $noHttps = TrackedVisit::query()->where('is_secure', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Visitas',
                    'data' => [$https, $noHttps],
                ],
            ],
            'labels' => ['HTTPS', 'No HTTPS'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}