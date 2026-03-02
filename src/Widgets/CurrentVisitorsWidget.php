<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\Filament\MetricsFathom\Concerns\InteractsWithFathom;

class CurrentVisitorsWidget extends StatsOverviewWidget
{
    use InteractsWithFathom;

    protected static ?string $pollingInterval = '30s';

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        if (! $this->isFathomConfigured()) {
            return [
                Stat::make(
                    __('filament-metrics-fathom::metrics-fathom.widgets.not_configured'),
                    __('filament-metrics-fathom::metrics-fathom.widgets.not_configured_description'),
                ),
            ];
        }

        try {
            $visitors = $this->cachedFathomCall('current-visitors', 15, function () {
                return $this->getFathom()->currentVisitors(detailed: true);
            });

            $stats = [
                Stat::make(
                    __('filament-metrics-fathom::metrics-fathom.widgets.current_visitors.total'),
                    (string) $visitors->total,
                )->icon('heroicon-o-users'),
            ];

            if ($visitors->content !== []) {
                foreach (array_slice($visitors->content, 0, 3) as $page) {
                    $stats[] = Stat::make(
                        $page['pathname'] ?? '-',
                        (string) ($page['total'] ?? 0),
                    )->icon('heroicon-o-document-text');
                }
            }

            return $stats;
        } catch (\Throwable $e) {
            return [
                Stat::make(
                    __('filament-metrics-fathom::metrics-fathom.widgets.error'),
                    $e->getMessage(),
                ),
            ];
        }
    }
}
