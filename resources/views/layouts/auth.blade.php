<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apik | Login</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
        />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @include('partials.styles')
    </head>

    <body data-pc-theme="light">
        @include('partials.auth_sidebar') @include('partials.header')

        <div class="pc-container">
            <div class="pc-content">
                @yield('page-header')
                <div class="row">
                    @yield('content') @include('partials.footer')
                </div>
            </div>
        </div>

        @include('partials.scripts')
    </body>
</html>
