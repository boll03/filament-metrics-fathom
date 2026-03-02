<?php

return [
    'navigation_group' => 'Configuracoes',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Configuracoes do Fathom Analytics',

    'sections' => [
        'api_configuration' => 'Configuracao da API',
        'advanced_settings' => 'Configuracoes Avancadas',
    ],

    'fields' => [
        'api_token' => [
            'label' => 'Token da API',
            'helper' => 'Seu token de API do Fathom Analytics. Gere um em usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID do Site',
            'helper' => 'Seu ID do site no Fathom (ex: ABCDEFGH). Encontrado no painel do Fathom em Configuracoes do Site.',
        ],
        'base_url' => [
            'label' => 'URL Base',
            'helper' => 'URL base da API do Fathom. Altere apenas se estiver usando um endpoint personalizado.',
        ],
        'timezone' => [
            'label' => 'Fuso Horario',
            'helper' => 'Fuso horario usado para consultas de agregacao baseadas em data.',
        ],
    ],

    'widgets' => [
        'current_visitors' => [
            'label' => 'Visitantes Atuais',
            'total' => 'Visitantes agora',
            'top_pages' => 'Paginas Mais Visitadas',
            'top_referrers' => 'Principais Referenciadores',
        ],
        'pageviews_chart' => [
            'label' => 'Visualizacoes e Visitas (Ultimos 30 Dias)',
            'visits' => 'Visitas',
            'pageviews' => 'Visualizacoes',
        ],
        'top_pages' => [
            'label' => 'Paginas Mais Visitadas',
            'page' => 'Pagina',
            'visits' => 'Visitas',
            'pageviews' => 'Visualizacoes',
        ],
        'top_referrers' => [
            'label' => 'Principais Referenciadores',
            'referrer' => 'Referenciador',
            'visits' => 'Visitas',
            'uniques' => 'Unicos',
        ],
        'top_browsers' => [
            'label' => 'Principais Navegadores',
        ],
        'top_countries' => [
            'label' => 'Principais Paises',
            'country' => 'Pais',
            'visits' => 'Visitas',
            'uniques' => 'Unicos',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'not_configured' => 'Nao Configurado',
        'not_configured_description' => 'Configure seu token da API do Fathom em Configuracoes.',
        'no_data' => 'Nenhum dado disponivel',
        'error' => 'Erro ao carregar dados',
    ],
];
