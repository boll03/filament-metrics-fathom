<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Concerns;

use Illuminate\Support\Facades\Cache;
use JeffersonGoncalves\MetricsFathom\Fathom;
use JeffersonGoncalves\MetricsFathom\Settings\FathomSettings;

trait InteractsWithFathom
{
    protected function isFathomConfigured(): bool
    {
        $settings = app(FathomSettings::class);

        return ! empty($settings->api_token) && ! empty($settings->site_id);
    }

    protected function getFathom(): Fathom
    {
        return app(Fathom::class);
    }

    /**
     * @return mixed
     */
    protected function cachedFathomCall(string $key, int $ttl, callable $callback)
    {
        return Cache::remember("filament-metrics-fathom:{$key}", $ttl, $callback);
    }

    protected function getFathomTimezone(): string
    {
        return app(FathomSettings::class)->timezone;
    }
}
