<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel')  }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-black">
        <div class="relative flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <li class="col-span-1 rounded-lg shadow divide-y divide-gray-200">
                            <div class="w-full flex items-center justify-between p-6 space-x-6 bg-purple-800">
                                <div class="flex-1 truncate">
                                    <div class="flex items-center space-x-3">
                                        <h3 class="text-purple-900 text-sm font-medium truncate">Heroku</h3>
                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">DevOps</span>
                                    </div>
                                    <p class="mt-1 text-gray-500 text-sm truncate">PHP Node.js React</p>
                                </div>
                                <img class="w-10" src="{{ asset('heroku-logo.png')  }}" alt="Heroku">
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a target="_blank" href="https://dashboard.heroku.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                            <button class="ml-3">Open</button>
                                        </a>
                                    </div>
                                    <div class="-ml-px w-0 flex-1 flex">
                                        <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                            <!-- Heroicon name: solid/phone -->
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                            </svg>
                                            <span class="ml-3">Call</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                        PHP v{{ PHP_VERSION }} | {{ date('M d, Y')  }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
