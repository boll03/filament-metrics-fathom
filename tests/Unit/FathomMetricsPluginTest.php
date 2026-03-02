<?php

use JeffersonGoncalves\Filament\MetricsFathom\FathomMetricsPlugin;

it('can be instantiated', function () {
    $plugin = FathomMetricsPlugin::make();

    expect($plugin)->toBeInstanceOf(FathomMetricsPlugin::class);
});

it('has the correct id', function () {
    $plugin = FathomMetricsPlugin::make();

    expect($plugin->getId())->toBe('filament-metrics-fathom');
});

it('has settings page enabled by default', function () {
    $plugin = FathomMetricsPlugin::make();

    $reflection = new ReflectionClass($plugin);
    $property = $reflection->getProperty('hasSettingsPage');
    $property->setAccessible(true);

    expect($property->getValue($plugin))->toBeTrue();
});

it('has widgets enabled by default', function () {
    $plugin = FathomMetricsPlugin::make();

    $reflection = new ReflectionClass($plugin);
    $property = $reflection->getProperty('hasWidgets');
    $property->setAccessible(true);

    expect($property->getValue($plugin))->toBeTrue();
});

it('can disable settings page', function () {
    $plugin = FathomMetricsPlugin::make()->settingsPage(false);

    $reflection = new ReflectionClass($plugin);
    $property = $reflection->getProperty('hasSettingsPage');
    $property->setAccessible(true);

    expect($property->getValue($plugin))->toBeFalse();
});

it('can disable widgets', function () {
    $plugin = FathomMetricsPlugin::make()->widgets(false);

    $reflection = new ReflectionClass($plugin);
    $property = $reflection->getProperty('hasWidgets');
    $property->setAccessible(true);

    expect($property->getValue($plugin))->toBeFalse();
});
