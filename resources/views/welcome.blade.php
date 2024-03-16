<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Julien Devergnies</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-white h-full overflow-x-hidden">
    <div class="fixed top-0 left-0 h-4 text-red-500 z-50" id="message"></div>

        <div id="introduction" class="relative h-screen">
            <img src="/images/desk-laptop-bs-as.jpeg" alt="" class="fixed inset-0 -z-10 h-full w-full object-cover">
            <div class="-mt-10 pt-4 before:block before:max-h-96 before:absolute before:-inset-1 before:-skew-y-3 before:bg-amber-50 before:bg-opacity-70 before:shadow-2xl">
                <div class="relative overflow-hidden h-80 md:h-auto pt-24 pb-12 sm:py-24 mx-auto max-w-7xl px-6 lg:px-8">
                    <x-presentation />
                </div>
            </div>
        </div>
        <x-description />
        <x-stack />
        <x-portfolio />
        <x-contact />

        <x-magellan />

{{--        <a href="{{ route('download', ['locale' => app()->getLocale()]) }}" class="fixed top-5 right-5 inline-flex items-center gap-x-1.5 rounded-md bg-green-700 px-3 py-2 text-sm font-semibold text-white shadow-md transition-all hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">--}}
{{--            <x-icon.download />--}}
{{--            CV--}}
{{--        </a>--}}
    <div id="languages" class="fixed top-5 right-5 flex flex-col space-y-2">
        @if(app()->getLocale() !== 'en')
        <a href="{{ route('homepage', ['locale' => 'en']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-gray-200 px-3 py-2 text-sm font-semibold text-gray-800 shadow-md transition-all hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
            EN
        </a> @endif
        @if(app()->getLocale() !== 'es')
        <a href="{{ route('homepage', ['locale' => 'es']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-yellow-400 px-3 py-2 text-sm font-semibold text-gray-800 shadow-md transition-all hover:bg-yellow-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
            ES
        </a> @endif
        @if(app()->getLocale() !== 'fr')
        <a href="{{ route('homepage', ['locale' => 'fr']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-md transition-all hover:bg-blue-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
            FR
        </a> @endif
    </div>

        @vite('resources/js/app.js')
    </body>
</html>
