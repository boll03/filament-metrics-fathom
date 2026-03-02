<?php

use JeffersonGoncalves\Filament\MetricsFathom\Concerns\InteractsWithFathom;
use JeffersonGoncalves\MetricsFathom\Settings\FathomSettings;

it('detects when fathom is not configured', function () {
    $widget = new class
    {
        use InteractsWithFathom;

        public function checkConfigured(): bool
        {
            return $this->isFathomConfigured();
        }
    };

    expect($widget->checkConfigured())->toBeFalse();
});

it('detects when fathom is configured', function () {
    $settings = app(FathomSettings::class);
    $settings->api_token = 'test-token';
    $settings->site_id = 'TESTSITE';
    $settings->save();

    $widget = new class
    {
        use InteractsWithFathom;

        public function checkConfigured(): bool
        {
            return $this->isFathomConfigured();
        }
    };

    expect($widget->checkConfigured())->toBeTrue();
});

it('returns the correct timezone', function () {
    $widget = new class
    {
        use InteractsWithFathom;

        public function getTimezone(): string
        {
            return $this->getFathomTimezone();
        }
    };

    expect($widget->getTimezone())->toBe('UTC');
});
