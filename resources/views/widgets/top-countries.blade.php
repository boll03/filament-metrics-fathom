<x-filament-widgets::widget>
    <x-filament::section :heading="__('filament-metrics-fathom::metrics-fathom.widgets.top_countries.label')">
        @if (! $configured)
            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ __('filament-metrics-fathom::metrics-fathom.widgets.not_configured_description') }}
            </p>
        @elseif ($error)
            <p class="text-sm text-danger-500">
                {{ __('filament-metrics-fathom::metrics-fathom.widgets.error') }}: {{ $error }}
            </p>
        @elseif (empty($data))
            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ __('filament-metrics-fathom::metrics-fathom.widgets.no_data') }}
            </p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th class="pb-2 text-left font-medium text-gray-500 dark:text-gray-400">
                                {{ __('filament-metrics-fathom::metrics-fathom.widgets.top_countries.country') }}
                            </th>
                            <th class="pb-2 text-right font-medium text-gray-500 dark:text-gray-400">
                                {{ __('filament-metrics-fathom::metrics-fathom.widgets.top_countries.visits') }}
                            </th>
                            <th class="pb-2 text-right font-medium text-gray-500 dark:text-gray-400">
                                {{ __('filament-metrics-fathom::metrics-fathom.widgets.top_countries.uniques') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr class="border-b border-gray-100 dark:border-gray-800">
                                <td class="py-2 text-gray-900 dark:text-gray-100">
                                    {{ $row['country_code'] ?? '-' }}
                                </td>
                                <td class="py-2 text-right text-gray-600 dark:text-gray-300">
                                    {{ number_format($row['visits'] ?? 0) }}
                                </td>
                                <td class="py-2 text-right text-gray-600 dark:text-gray-300">
                                    {{ number_format($row['uniques'] ?? 0) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
