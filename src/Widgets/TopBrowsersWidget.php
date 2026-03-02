<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Concerns\InteractsWithFathom;
use JeffersonGoncalves\MetricsFathom\Enums\Aggregate;
use JeffersonGoncalves\MetricsFathom\Enums\FieldGrouping;

class TopBrowsersWidget extends ChartWidget
{
    use InteractsWithFathom;

    protected int|string|array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    public function getHeading(): string
    {
        return __('filament-metrics-fathom::metrics-fathom.widgets.top_browsers.label');
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        if (! $this->isFathomConfigured()) {
            return [
                'datasets' => [],
                'labels' => [],
            ];
        }

        try {
            $data = $this->cachedFathomCall('top-browsers', 300, function () {
                return $this->getFathom()->aggregate(
                    $this->getFathom()->query()
                        ->aggregate(Aggregate::Visits)
                        ->groupByField(FieldGrouping::Browser)
                        ->from(now()->subDays(30)->startOfDay())
                        ->to(now()->endOfDay())
                        ->timezone($this->getFathomTimezone())
                        ->sortBy('visits', 'desc')
                        ->limit(8)
                );
            });

            if (empty($data)) {
                return [
                    'datasets' => [],
                    'labels' => [],
                ];
            }

            $labels = [];
            $values = [];

            foreach ($data as $row) {
                $labels[] = $row['browser'] ?? __('filament-metrics-fathom::metrics-fathom.widgets.no_data');
                $values[] = $row['visits'] ?? 0;
            }

            return [
                'datasets' => [
                    [
                        'data' => $values,
                        'backgroundColor' => [
                            '#6366f1', '#f59e0b', '#10b981', '#ef4444',
                            '#8b5cf6', '#06b6d4', '#f97316', '#ec4899',
                        ],
                    ],
                ],
                'labels' => $labels,
            ];
        } catch (\Throwable) {
            return [
                'datasets' => [],
                'labels' => [],
            ];
        }
    }
}
