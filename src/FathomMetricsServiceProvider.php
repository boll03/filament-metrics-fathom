<?php

namespace JeffersonGoncalves\Filament\MetricsFathom;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FathomMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-metrics-fathom')
            ->hasTranslations()
            ->hasViews();
    }
}
