@props([
'livewire' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ __('filament-panels::layout.direction') ?? 'ltr' }}" @class([ 'fi min-h-screen' , 'dark'=>
filament()->hasDarkModeForced(),
])
>

<head>
    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::HEAD_START, scopes:
    $livewire->getRenderHookScopes()) }}

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @if ($favicon = filament()->getFavicon())
    <link rel="icon" href="{{ $favicon }}" />
    @endif

    <link rel="icon" sizes="192x192" href="{{ asset('images/icon.png') }}">
    <link rel="icon" sizes="128x128" href="{{ asset('images/icon.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}" />
    <!--[if IE]><link rel="shortcut icon" href="{{ $favicon }}" type="image/vnd.microsoft.icon" /><![endif]-->
    <link rel="icon" sizes="any" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <title>
        {{ filled($title = strip_tags(($livewire ?? null)?->getTitle() ?? '')) ? "{$title} - " : null }}
        {{ strip_tags(filament()->getBrandName()) }}
    </title>

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::STYLES_BEFORE, scopes:
    $livewire->getRenderHookScopes()) }}

    <style>
        [x-cloak=''],
        [x-cloak='x-cloak'],
        [x-cloak='1'] {
            display: none !important;
        }

        @media (max-width: 1023px) {
            [x-cloak='-lg'] {
                display: none !important;
            }
        }

        @media (min-width: 1024px) {
            [x-cloak='lg'] {
                display: none !important;
            }
        }
    </style>

    @filamentStyles

    {{ filament()->getTheme()->getHtml() }}
    {{ filament()->getFontHtml() }}

    <style>
        :root {
            --font-family: '{!! filament()->getFontFamily() !!}';

            --sidebar-width: {
                    {
                    filament()->getSidebarWidth()
                }
            }

            ;

            --collapsed-sidebar-width: {
                    {
                    filament()->getCollapsedSidebarWidth()
                }
            }

            ;

            --default-theme-mode: {
                    {
                    filament()->getDefaultThemeMode()->value
                }
            }

            ;
        }
    </style>

    @stack('styles')

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::STYLES_AFTER, scopes:
    $livewire->getRenderHookScopes()) }}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
                setTimeout(() => {
                    const activeSidebarItem = document.querySelector(
                        '.fi-sidebar-item-active',
                    )

                    if (!activeSidebarItem) {
                        return
                    }

                    const sidebarWrapper =
                        document.querySelector('.fi-sidebar-nav')

                    if (!sidebarWrapper) {
                        return
                    }

                    sidebarWrapper.scrollTo(
                        0,
                        activeSidebarItem.offsetTop - window.innerHeight / 2,
                    )
                }, 0)
            })
    </script>

    @if (! filament()->hasDarkMode())
    <script>
        localStorage.setItem('theme', 'light')
    </script>
    @elseif (filament()->hasDarkModeForced())
    <script>
        localStorage.setItem('theme', 'dark')
    </script>
    @else
    <script>
        const theme = localStorage.getItem('theme') ?? @js(filament()->getDefaultThemeMode()->value)

                if (
                    theme === 'dark' ||
                    (theme === 'system' &&
                        window.matchMedia('(prefers-color-scheme: dark)')
                            .matches)
                ) {
                    document.documentElement.classList.add('dark')
                }
    </script>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::HEAD_END, scopes:
    $livewire->getRenderHookScopes()) }}
</head>

<body {{ $attributes ->merge(($livewire ?? null)?->getExtraBodyAttributes() ?? [], escape: false)
    ->class([
    'fi-body',
    'fi-panel-' . filament()->getId(),
    'min-h-screen bg-gray-50 font-normal text-gray-950 antialiased dark:bg-gray-950 dark:text-white',
    ]) }}
    >
    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::BODY_START, scopes:
    $livewire->getRenderHookScopes()) }}

    {{ $slot }}

    @livewire(Filament\Livewire\Notifications::class)

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SCRIPTS_BEFORE, scopes:
    $livewire->getRenderHookScopes()) }}

    @filamentScripts(withCore: true)

    @if (config('filament.broadcasting.echo'))
    <script data-navigate-once>
        window.Echo = new window.EchoFactory(@js(config('filament.broadcasting.echo')))

                window.dispatchEvent(new CustomEvent('EchoLoaded'))
    </script>
    @endif

    @stack('scripts')

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SCRIPTS_AFTER, scopes:
    $livewire->getRenderHookScopes()) }}

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::BODY_END, scopes:
    $livewire->getRenderHookScopes()) }}

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('error', (event) => {
                alert(event)
            });
        });
    </script>
</body>

</html>