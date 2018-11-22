<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('/css/main.css', 'assets/build') }}">
    </head>
    <body class="antialiased font-sans">
        <div id="app">
            @include('partials.navbar')
            
            <main id="page-wrap">
            @yield('body')

            @include('partials.footer')
            </main>
        </div>
        <script src="{{ mix('/js/main.js', 'assets/build') }}"></script>
    </body>
</html>
