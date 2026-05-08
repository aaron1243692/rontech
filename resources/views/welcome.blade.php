<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    <body class="bg-body-tertiary">
        <main class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="text-uppercase text-muted mb-2">Bootstrap 5</p>
                            <h1 class="h2 mb-3">Bootstrap is loaded</h1>
                            <p class="mb-4">This card, spacing, grid, and button all come from Bootstrap.</p>
                            <button class="btn btn-primary" type="button">Bootstrap button</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="mb-2 text-sm font-bold tracking-wider text-blue-600">TAILWIND V4</p>
                            <h2 class="mb-3 text-3xl font-bold text-red-500">Tailwind is loaded</h2>
                            <p class="mb-0 text-base text-gray-700">
                                This heading and text colors come from Tailwind utilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
