<?php

use JeffersonGoncalves\Filament\MetricsFathom\Pages\FathomMetricsSettingsPage;

it('can render the settings page', function () {
    $this->get(FathomMetricsSettingsPage::getUrl())
        ->assertSuccessful();
})->skip('Requires authenticated user');

it('has the correct navigation label', function () {
    expect(FathomMetricsSettingsPage::getNavigationLabel())
        ->toBe('Fathom Analytics');
});
