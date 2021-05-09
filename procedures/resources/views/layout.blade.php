{{-- Index using @https://laravel.com/docs/8.x/blade --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Added the CSRF --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- I love UiKit, makes my lifeee so much easier --}}
        <link rel="stylesheet" href="uikit-3.6.21/css/uikit.min.css" />
        <script type="text/javascript" src="uikit-3.6.21/js/uikit.min.js"></script>
        <script type="text/javascript" src="uikit-3.6.21/js/uikit-icons.min.js"></script>

        <link rel="stylesheet" href="css/app.css" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>Procedures &dash; @yield('pageTitle')</title>
    </head>
    <body>
        <div id="app-root">
            <div class="uk-section uk-section-default uk-padding-remove uk-position-relative uk-background-muted" uk-height-viewport>
                <div class="uk-container uk-container-small">
                    <page-header></page-header>
                    <hr/>
                    @yield('content')
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
