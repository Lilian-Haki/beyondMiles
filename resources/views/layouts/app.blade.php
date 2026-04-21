
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
        <script id="tailwind-config">
            tailwind.config = {
              darkMode: "class",
              theme: {
                extend: {
                  "colors": {
                    "outline": "#cbd5e1",
                    "surface-container-high": "#e9e8e5",
                    "on-primary-container": "#221910",
                    "on-tertiary-container": "#00405c",
                    "primary": "#f48c25",
                    "primary-fixed-dim": "#ffb77d",
                    "tertiary": "#00658e",
                    "surface-container-lowest": "#ffffff",
                    "secondary-container": "#f1f5f9",
                    "surface-tint": "#f48c25",
                    "on-background": "#0f172a",
                    "surface-dim": "#e9d7cb",
                    "on-secondary-fixed-variant": "#334155",
                    "on-tertiary-fixed-variant": "#004c6c",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed-dim": "#84cfff",
                    "surface-container-highest": "#e2e1de",
                    "on-secondary-container": "#0f172a",
                    "secondary-fixed-dim": "#cbd5e1",
                    "inverse-primary": "#ffb77d",
                    "on-error": "#ffffff",
                    "tertiary-container": "#00b1f5",
                    "on-primary-fixed": "#2f1500",
                    "on-secondary-fixed": "#0f172a",
                    "surface-container-low": "#f8f7f5",
                    "on-tertiary": "#ffffff",
                    "secondary": "#334155",
                    "on-surface": "#0f172a",
                    "on-tertiary-fixed": "#001e2e",
                    "error": "#ba1a1a",
                    "error-container": "#ffdad6",
                    "surface": "#f8f7f5",
                    "surface-bright": "#ffffff",
                    "on-primary": "#0f172a",
                    "outline-variant": "#e2e8f0",
                    "on-primary-fixed-variant": "#6e3900",
                    "surface-variant": "#f1f0ee",
                    "primary-container": "#f48c25",
                    "on-error-container": "#93000a",
                    "background": "#f8f7f5",
                    "on-surface-variant": "#475569",
                    "primary-fixed": "#ffdcc3",
                    "inverse-on-surface": "#f8f7f5",
                    "secondary-fixed": "#e2e8f0",
                    "inverse-surface": "#221910",
                    "surface-container": "#f1f0ee",
                    "tertiary-fixed": "#c7e7ff"
                  },
                  "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                  },
                  "fontFamily": {
                    "headline": ["Lexend"],
                    "body": ["Lexend"],
                    "label": ["Lexend"]
                  }
                },
              },
            }
        </script>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            .scrim-bottom {
                background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0) 100%);
            }
            .scrim-hero {
                background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-background dark:bg-inverse-surface font-body text-on-background dark:text-inverse-on-surface">
        @include('components.header')
        {{ $slot }}
        @include('components.footer')

        @livewireScripts
    </body>
</html>
