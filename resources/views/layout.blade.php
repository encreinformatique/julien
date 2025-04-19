<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Julien Devergnies</title>
    <link rel="manifest" href="{{ route('webmanifest') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-white h-full overflow-x-hidden">

@yield('navigation')

@yield('content')

{{--    <div id="languages" class="fixed top-5 right-5 flex flex-col space-y-2">--}}
{{--        @if(app()->getLocale() !== 'en')--}}
{{--        <a href="{{ route('homepage', ['locale' => 'en']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-gray-200 px-3 py-2 text-sm font-semibold text-gray-800 shadow-md transition-all hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">--}}
{{--            EN--}}
{{--        </a> @endif--}}
{{--        @if(app()->getLocale() !== 'es')--}}
{{--        <a href="{{ route('homepage', ['locale' => 'es']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-yellow-400 px-3 py-2 text-sm font-semibold text-gray-800 shadow-md transition-all hover:bg-yellow-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">--}}
{{--            ES--}}
{{--        </a> @endif--}}
{{--        @if(app()->getLocale() !== 'fr')--}}
{{--        <a href="{{ route('homepage', ['locale' => 'fr']) }}" class="inline-flex items-center gap-x-1.5 rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-md transition-all hover:bg-blue-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">--}}
{{--            FR--}}
{{--        </a> @endif--}}
{{--    </div>--}}

@vite('resources/js/app.js')
</body>
</html>
