<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Julien Devergnies</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen bg-gray-200">
        <main class="p-0 w-full mx-auto overflow-hidden bg-white min-h-screen">
{{--        <main--}}
{{--            class="h-[297mm] w-[210mm] overflow-hidden rounded-md bg-white p-0 shadow-lg m-0"--}}
{{--        >--}}
            <x-header />
            <x-context />
            <div class="grid gap-x-8 gap-y-4 grid-cols-2 bg-white">
                <!-- Expérience et Formation -->
                <div class="pl-3">
                    <x-layout.h2>{{ __('template.laboral_experience') }}</x-h2>
                    <div>
                        @foreach(__('cv.experience') as $experience)
                            <x-work-experience
                                :job-title="$experience->getJobTitle()"
                                :from="$experience->getFrom()"
                                :until="$experience->getUntil()"
                                :location="$experience->getLocation()"
                            >
                                @foreach($experience->getFeats() as $feat)
                                <li>{{ $feat }}</li>
                                @endforeach
                            </x-work-experience>
                        @endforeach
                    </div>
                </div>
                <!-- Langues et Informatique -->
                <div class="pr-3 space-y-4">
                    <x-layout.h2>{{ __('template.computer') }}</x-h2>
                    <div class="grid gap-x-8 gap-y-6 grid-cols-2">
                        <x-cv.ability ability="Back-end" details="PHP, Symfony, PHPunit" rate="11/12" />
                        <x-cv.ability ability="SQL" details="MySQL, SQLite" rate="9/12" />
                        <x-cv.ability ability="JavaScript" details="NodeJS, VueJS" rate="8/12" />
                        <x-cv.ability ability="CSS" details="Tailwind, Bootstrap..." rate="10/12" />
                        <x-cv.ability :ability="__('template.systems')" details="Debian, Ubuntu" rate="5/12" />
                        <x-cv.ability ability="Mobile" details="React Native" rate="4/12" />
                    </div>

                    <x-layout.h2>{{ __('template.languages') }}</x-h2>
                    <x-cv.language :ability="__('template.lang.english')" details="C2 Proficient (EF SET)" rate="9/12" />
                    <x-cv.language :ability="__('template.lang.spanish')" :details="__('template.bilingual')" rate="11/12" />
                    <x-cv.language :ability="__('template.lang.french')" details="" rate="full" />

                    <x-layout.h2>{{ __('template.education') }}</x-h2>
                    <div>
                        @foreach(__('cv.education') as $education)
                            <div class="flex">
                                <span class="min-w-16 mt-1">{{ $education['year'] }}</span>
                                <div>
                                    <h3 class="flex-1 text-xl font-bold tracking-tight">
                                        {{ $education['title'] }}
                                        <span class="text-sky-600">{{ $education['school'] }}</span>
                                    </h3>
                                    <p class="pl-4 mt-3 text-slate-900">
                                        {{ $education['details'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
