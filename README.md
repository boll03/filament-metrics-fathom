<div class="filament-hidden">

![Filament Metrics Fathom](https://raw.githubusercontent.com/jeffersongoncalves/filament-metrics-fathom/1.x/art/jeffersongoncalves-filament-metrics-fathom.png)

</div>

# Filament Metrics Fathom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-metrics-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-fathom)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-metrics-fathom/phpstan.yml?branch=1.x&label=phpstan&style=flat-square)](https://github.com/jeffersongoncalves/filament-metrics-fathom/actions?query=workflow%3Aphpstan+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-metrics-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-fathom)

Filament plugin for **Fathom Analytics** metrics. Provides a settings page and dashboard widgets to visualize your website analytics directly in Filament.

## Version Compatibility

| Plugin | Filament | Laravel | PHP |
|--------|----------|---------|-----|
| 1.x | 3.x | 10.x / 11.x | 8.2+ |
| 2.x (soon) | 4.x | 11.x+ | 8.2+ |
| 3.x (soon) | 5.x | 11.x+ | 8.2+ |

## Requirements

- [jeffersongoncalves/laravel-metrics-fathom](https://github.com/jeffersongoncalves/laravel-metrics-fathom) `^1.0`
- [filament/spatie-laravel-settings-plugin](https://filamentphp.com/plugins/filament-spatie-settings) `^3.0`

## Installation

```bash
composer require jeffersongoncalves/filament-metrics-fathom:"^1.0"
```

Publish and run the settings migration from the base package:

```bash
php artisan vendor:publish --tag="metrics-fathom-settings"
php artisan migrate
```

## Setup

Register the plugin in your Filament panel provider:

```php
use JeffersonGoncalves\Filament\MetricsFathom\FathomMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugin(FathomMetricsPlugin::make());
}
```

## Configuration Options

You can disable the settings page or widgets:

```php
FathomMetricsPlugin::make()
    ->settingsPage(false) // Disable the settings page
    ->widgets(false)      // Disable all widgets
```

## Widgets

The plugin provides 7 dashboard widgets:

| Widget | Description | Type |
|--------|-------------|------|
| **Current Visitors** | Real-time visitor count with top pages | Stats Overview (polls every 30s) |
| **Pageviews Chart** | Visits & pageviews over the last 30 days | Line Chart |
| **Top Pages** | Most visited pages with visit/pageview counts | Table |
| **Top Referrers** | Traffic sources with visit/unique counts | Table |
| **Top Browsers** | Browser distribution | Doughnut Chart |
| **Top Countries** | Country distribution with visit/unique counts | Table |
| **Top Devices** | Device type distribution (desktop, mobile, tablet) | Doughnut Chart |

All widgets include:
- Automatic error handling with user-friendly messages
- "Not Configured" state when API token is missing
- Caching to respect Fathom API rate limits (10 req/min)
- Multi-language support (English and Portuguese)

## Translations

The plugin supports English (`en`) and Brazilian Portuguese (`pt_BR`). You can publish the translations:

```bash
php artisan vendor:publish --tag="filament-metrics-fathom-translations"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Jefferson Goncalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
