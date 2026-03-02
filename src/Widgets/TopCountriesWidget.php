<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Widgets;

use Filament\Widgets\Widget;
use JeffersonGoncalves\Filament\MetricsFathom\Concerns\InteractsWithFathom;
use JeffersonGoncalves\MetricsFathom\Enums\Aggregate;
use JeffersonGoncalves\MetricsFathom\Enums\FieldGrouping;

class TopCountriesWidget extends Widget
{
    use InteractsWithFathom;

    protected string $view = 'filament-metrics-fathom::widgets.top-countries';

    protected int|string|array $columnSpan = 1;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        if (! $this->isFathomConfigured()) {
            return [
                'configured' => false,
                'error' => null,
                'data' => [],
            ];
        }

        try {
            $data = $this->cachedFathomCall('top-countries', 300, function () {
                return $this->getFathom()->aggregate(
                    $this->getFathom()->query()
                        ->aggregate(Aggregate::Visits, Aggregate::Uniques)
                        ->groupByField(FieldGrouping::CountryCode)
                        ->from(now()->subDays(30)->startOfDay())
                        ->to(now()->endOfDay())
                        ->timezone($this->getFathomTimezone())
                        ->sortBy('visits', 'desc')
                        ->limit(10)
                );
            });

            return [
                'configured' => true,
                'error' => null,
                'data' => $data,
            ];
        } catch (\Throwable $e) {
            return [
                'configured' => true,
                'error' => $e->getMessage(),
                'data' => [],
            ];
        }
    }
}
