<?php

namespace App\Filament\Widgets;

use App\Models\TrackedVisit;
use Carbon\CarbonPeriod;
use Filament\Widgets\ChartWidget;

class GraficoVisitasPorDia extends ChartWidget
{
    protected ?string $heading = 'Visitas por día';

    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 1;

    protected function getData(): array
    {
        $startDate = now()->subDays(6)->startOfDay();
        $endDate = now()->endOfDay();

        $visitas = TrackedVisit::query()
            ->selectRaw('DATE(created_at) as fecha, COUNT(*) as total')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('fecha')
            ->orderBy('fecha')
            ->pluck('total', 'fecha');

        $labels = [];
        $data = [];

        foreach (CarbonPeriod::create($startDate, $endDate) as $date) {
            $fecha = $date->format('Y-m-d');
            $labels[] = $date->translatedFormat('d M');
            $data[] = $visitas[$fecha] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Visitas',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}