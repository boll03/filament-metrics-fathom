<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Concerns\InteractsWithFathom;
use JeffersonGoncalves\MetricsFathom\Enums\Aggregate;
use JeffersonGoncalves\MetricsFathom\Enums\DateGrouping;

class PageviewsChartWidget extends ChartWidget
{
    use InteractsWithFathom;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $maxHeight = '300px';

    public function getHeading(): string
    {
        return __('filament-metrics-fathom::metrics-fathom.widgets.pageviews_chart.label');
    }

    protected function getType(): string
    {
        return 'line';
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
            $data = $this->cachedFathomCall('pageviews-chart-30d', 300, function () {
                return $this->getFathom()->aggregate(
                    $this->getFathom()->query()
                        ->aggregate(Aggregate::Visits, Aggregate::Pageviews)
                        ->groupByDate(DateGrouping::Day)
                        ->from(now()->subDays(30)->startOfDay())
                        ->to(now()->endOfDay())
                        ->timezone($this->getFathomTimezone())
                );
            });

            if (empty($data)) {
                return [
                    'datasets' => [],
                    'labels' => [],
                ];
            }

            $labels = [];
            $visits = [];
            $pageviews = [];

            foreach ($data as $row) {
                $labels[] = isset($row['date']) ? date('M d', strtotime($row['date'])) : '';
                $visits[] = $row['visits'] ?? 0;
                $pageviews[] = $row['pageviews'] ?? 0;
            }

            return [
                'datasets' => [
                    [
                        'label' => __('filament-metrics-fathom::metrics-fathom.widgets.pageviews_chart.visits'),
                        'data' => $visits,
                        'borderColor' => '#6366f1',
                        'backgroundColor' => 'rgba(99, 102, 241, 0.1)',
                        'fill' => true,
                    ],
                    [
                        'label' => __('filament-metrics-fathom::metrics-fathom.widgets.pageviews_chart.pageviews'),
                        'data' => $pageviews,
                        'borderColor' => '#f59e0b',
                        'backgroundColor' => 'rgba(245, 158, 11, 0.1)',
                        'fill' => true,
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
