<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <script>
            function toggleDark() {
                document.documentElement.classList.toggle('dark');
                localStorage.dark = !JSON.parse(localStorage.dark);
            }

            if (localStorage.dark !== 'undefined') {
                if(localStorage.dark === 'true') {
                    document.documentElement.classList.add('dark');
                    localStorage.dark = true;
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.dark = false;
                }
            }
        </script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200 dark:bg-gray-900 container mx-auto">
        <div class="fixed top-0 right-0 h-6 w-14 mt-1 mr-2">
            <button class="focus:outline-none p-1 border border-dashed border-gray-500" onclick="toggleDark()">
                <i class="flex min-w-6">
                    <img src="{{ asset('/images/moon-black.svg') }}" alt="moon" class="h-6 w-6">
                    <img src="{{ asset('/images/sun-color.svg') }}" alt="sun" class="h-6 w-6">
                </i>
            </button>
        </div>
        @inertia

        @env ('local')
            <script src="http://localhost:8080/js/bundle.js"></script>
        @endenv
        <script>
            document.onkeydown = function(e) {
                if (e.shiftKey && e.which === 68) {
                    toggleDark();
                }
            };
        </script>
    </body>
</html>
