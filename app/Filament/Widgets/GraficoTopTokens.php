<?php

namespace App\Filament\Widgets;

use App\Models\TrackedVisit;
use Filament\Widgets\ChartWidget;

class GraficoTopTokens extends ChartWidget
{
    protected ?string $heading = 'Top 5 tokens';

    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = [
        'md' => 2,
        'xl' => 2,
    ];

    protected function getData(): array
    {
        $tokens = TrackedVisit::query()
            ->selectRaw('token, COUNT(*) as total')
            ->whereNotNull('token')
            ->where('token', '!=', '')
            ->groupBy('token')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Clics',
                    'data' => $tokens->pluck('total')->toArray(),
                ],
            ],
            'labels' => $tokens->pluck('token')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}