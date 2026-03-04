# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

## v3.0.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## v3.0.0 - 2026-03-02

### Filament v5 Support

#### Breaking Changes

- Requires Filament ^5.0 (upgraded from ^4.0)
- Requires Livewire 4.x (resolved automatically via Filament v5)

#### Changes

- Added testbench ^11.0 support for future Laravel versions
- Cleaned PHPStan baseline completely (all view-string errors resolved natively)

#### Requirements

- PHP ^8.2
- Filament ^5.0
- Laravel 11.x+
- Livewire 4.x

## Unreleased
