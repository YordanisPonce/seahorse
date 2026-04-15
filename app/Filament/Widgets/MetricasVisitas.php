<?php

namespace App\Filament\Widgets;

use App\Models\TrackedVisit;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MetricasVisitas extends BaseWidget
{
    protected ?string $heading = 'Resumen de visitas';

    protected function getStats(): array
    {
        $hoy = now()->startOfDay();
        $ayer = now()->subDay()->startOfDay();
        $inicioSemana = now()->startOfWeek();
        $inicioMes = now()->startOfMonth();

        $totalVisitas = TrackedVisit::query()->count();

        $visitasHoy = TrackedVisit::query()
            ->where('created_at', '>=', $hoy)
            ->count();

        $visitasAyer = TrackedVisit::query()
            ->whereBetween('created_at', [$ayer, $hoy])
            ->count();

        $visitasSemana = TrackedVisit::query()
            ->where('created_at', '>=', $inicioSemana)
            ->count();

        $visitasMes = TrackedVisit::query()
            ->where('created_at', '>=', $inicioMes)
            ->count();

        $ipsUnicas = TrackedVisit::query()
            ->whereNotNull('ip')
            ->distinct('ip')
            ->count('ip');

        $tokensUnicos = TrackedVisit::query()
            ->whereNotNull('token')
            ->distinct('token')
            ->count('token');

        $variacionHoy = $visitasAyer > 0
            ? round((($visitasHoy - $visitasAyer) / $visitasAyer) * 100, 1)
            : ($visitasHoy > 0 ? 100 : 0);

        return [
            Stat::make('Total de visitas', number_format($totalVisitas))
                ->description('Registros acumulados')
                ->icon('heroicon-o-globe-alt'),

            Stat::make('Visitas de hoy', number_format($visitasHoy))
                ->description(
                    $variacionHoy >= 0
                    ? "↑ {$variacionHoy}% vs ayer"
                    : "↓ " . abs($variacionHoy) . "% vs ayer"
                )
                ->icon('heroicon-o-calendar-days'),

            Stat::make('Esta semana', number_format($visitasSemana))
                ->description('Desde el lunes hasta hoy')
                ->icon('heroicon-o-chart-bar'),

            Stat::make('Este mes', number_format($visitasMes))
                ->description('Desde el inicio del mes')
                ->icon('heroicon-o-chart-pie'),

            Stat::make('IPs únicas', number_format($ipsUnicas))
                ->description('IPs distintas registradas')
                ->icon('heroicon-o-signal'),

            Stat::make('Tokens únicos', number_format($tokensUnicos))
                ->description('Enlaces o campañas distintas')
                ->icon('heroicon-o-key'),
        ];
    }
}