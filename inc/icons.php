<?php
/**
 * Inline SVG icons. Returns markup; icons inherit color via currentColor.
 */
function counsel_icon($name)
{
    $fill   = '<svg class="icon icon--%s" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">%s</svg>';
    $stroke = '<svg class="icon icon--%s" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">%s</svg>';

    $icons = [
        // Brand / UI
        'logo'      => [$stroke, '<path d="M12 2 4 5v6c0 5.2 3.4 9.5 8 11 4.6-1.5 8-5.8 8-11V5l-8-3z"/><path d="M12 7v9M9 16h6M7.5 9h9M7.5 9 6 12.5a1.5 1.5 0 0 0 3 0L7.5 9zM16.5 9 15 12.5a1.5 1.5 0 0 0 3 0L16.5 9z"/>'],
        'phone'     => [$fill, '<path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2z"/>'],
        'arrow'     => [$stroke, '<path d="M4 12h15M13 6l6 6-6 6"/>'],
        'chevron'   => [$stroke, '<path d="m6 9 6 6 6-6"/>'],

        // Services
        'bank'      => [$fill, '<path d="M12 2 2 7v2h20V7L12 2zM4 11v7h3v-7H4zm6.5 0v7h3v-7h-3zM17 11v7h3v-7h-3zM2 20v2h20v-2H2z"/>'],
        'family'    => [$fill, '<path d="M16 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-8 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>'],
        'pen'       => [$fill, '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>'],
        'house'     => [$fill, '<path fill-rule="evenodd" d="M12 2.5 1.5 12H4v9.5h16V12h2.5L12 2.5zM12 9a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-.6 1.6h1.2v.7c.7.15 1.2.6 1.3 1.3h-1.1c-.05-.3-.35-.5-.8-.5-.5 0-.8.2-.8.5s.3.45 1 .6c1 .2 1.75.55 1.75 1.45 0 .7-.55 1.2-1.35 1.35v.7h-1.2v-.7c-.8-.15-1.3-.65-1.35-1.4h1.1c.05.35.4.6.95.6.5 0 .85-.2.85-.5s-.3-.45-1.05-.6c-.95-.2-1.65-.55-1.65-1.45 0-.65.5-1.15 1.15-1.3v-.75z"/>'],
        'scales'    => [$stroke, '<path d="M12 3v18M7 21h10M4 7h16"/><path d="M5 7 2 14a3 3 0 0 0 6 0L5 7zM19 7l-3 7a3 3 0 0 0 6 0l-3-7z"/>'],
        'document'  => [$fill, '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>'],

        // Social
        'facebook'  => [$fill, '<path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14A26.6 26.6 0 0 0 14.64 2C11.93 2 10 3.66 10 6.7v2.8H7v4h3V22h4v-8.5z"/>'],
        'x'         => [$fill, '<path d="M18.24 2.25h3.31l-7.23 8.26 8.5 11.24h-6.65l-5.21-6.82-5.97 6.82H1.68l7.73-8.84L1.25 2.25h6.83l4.71 6.23 5.45-6.23zm-1.16 17.52h1.83L7.08 4.13H5.12l11.96 15.64z"/>'],
        'instagram' => [$stroke, '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".6" fill="currentColor"/>'],
        'telegram'  => [$fill, '<path d="M21.94 4.3 18.7 19.6c-.24 1.08-.88 1.35-1.79.84l-4.94-3.64-2.38 2.29c-.26.26-.48.48-.99.48l.35-5.02 9.14-8.26c.4-.35-.09-.55-.62-.2L6.17 13.2l-4.87-1.52c-1.06-.33-1.08-1.06.22-1.57L20.55 2.8c.88-.32 1.65.2 1.39 1.5z"/>'],
    ];

    if ($name === 'silhouette') {
        return '<svg class="ph__silhouette" viewBox="0 0 200 220" fill="currentColor" aria-hidden="true" focusable="false"><path d="M100 18c-24 0-38 18-38 42 0 18 8 34 20 42v10c-30 6-58 18-64 40l-6 68h176l-6-68c-6-22-34-34-64-40v-10c12-8 20-24 20-42 0-24-14-42-38-42z"/></svg>';
    }

    if (!isset($icons[$name])) {
        return '';
    }

    [$template, $paths] = $icons[$name];
    return sprintf($template, esc_attr($name), $paths);
}

function counsel_social_links($class = 'social')
{
    $links = [
        'facebook'  => 'Facebook',
        'x'         => 'X',
        'instagram' => 'Instagram',
        'telegram'  => 'Telegram',
    ];

    echo '<ul class="' . esc_attr($class) . '">';
    foreach ($links as $icon => $label) {
        printf(
            '<li><a href="#" aria-label="%s">%s</a></li>',
            esc_attr($label),
            counsel_icon($icon)
        );
    }
    echo '</ul>';
}
