<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics Settings',

    'sections' => [
        'api_configuration' => 'API Configuration',
        'advanced_settings' => 'Advanced Settings',
    ],

    'fields' => [
        'api_token' => [
            'label' => 'API Token',
            'helper' => 'Your Fathom Analytics API token. Generate one at usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'Site ID',
            'helper' => 'Your Fathom site ID (e.g. ABCDEFGH). Found in your Fathom dashboard under Site Settings.',
        ],
        'base_url' => [
            'label' => 'Base URL',
            'helper' => 'Fathom API base URL. Only change this if you are using a custom endpoint.',
        ],
        'timezone' => [
            'label' => 'Timezone',
            'helper' => 'Timezone used for date-based aggregation queries.',
        ],
    ],

    'widgets' => [
        'current_visitors' => [
            'label' => 'Current Visitors',
            'total' => 'Visitors right now',
            'top_pages' => 'Top Pages',
            'top_referrers' => 'Top Referrers',
        ],
        'pageviews_chart' => [
            'label' => 'Pageviews & Visits (Last 30 Days)',
            'visits' => 'Visits',
            'pageviews' => 'Pageviews',
        ],
        'top_pages' => [
            'label' => 'Top Pages',
            'page' => 'Page',
            'visits' => 'Visits',
            'pageviews' => 'Pageviews',
        ],
        'top_referrers' => [
            'label' => 'Top Referrers',
            'referrer' => 'Referrer',
            'visits' => 'Visits',
            'uniques' => 'Uniques',
        ],
        'top_browsers' => [
            'label' => 'Top Browsers',
        ],
        'top_countries' => [
            'label' => 'Top Countries',
            'country' => 'Country',
            'visits' => 'Visits',
            'uniques' => 'Uniques',
        ],
        'top_devices' => [
            'label' => 'Devices',
        ],
        'not_configured' => 'Not Configured',
        'not_configured_description' => 'Configure your Fathom API token in Settings.',
        'no_data' => 'No data available',
        'error' => 'Error loading data',
    ],
];
