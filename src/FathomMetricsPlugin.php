<?php

namespace JeffersonGoncalves\Filament\MetricsFathom;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\MetricsFathom\Pages\FathomMetricsSettingsPage;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\CurrentVisitorsWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\PageviewsChartWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopBrowsersWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopCountriesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopDevicesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopPagesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopReferrersWidget;

class FathomMetricsPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    protected bool $hasWidgets = true;

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function getId(): string
    {
        return 'filament-metrics-fathom';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([
                FathomMetricsSettingsPage::class,
            ]);
        }

        if ($this->hasWidgets) {
            $panel->widgets([
                CurrentVisitorsWidget::class,
                PageviewsChartWidget::class,
                TopPagesWidget::class,
                TopReferrersWidget::class,
                TopBrowsersWidget::class,
                TopCountriesWidget::class,
                TopDevicesWidget::class,
            ]);
        }
    }

    public function boot(Panel $panel): void {}

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;

        return $this;
    }

    public function widgets(bool $condition = true): static
    {
        $this->hasWidgets = $condition;

        return $this;
    }
}
